<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Laravel\Jetstream\Jetstream;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Carbon;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function index(Request $request){
        $user = User::all();
        // return UserResource::collection($user);
        $users = DB::table('users')
                            ->select('*')
                            ->get();
        // return Jetstream::inertia()->render($request, 'Profile/Show', [
        //     'sessions' => $this->sessions($request)->all(),
        // ]);

        return view('admin.user.index', compact('users'));
    }
    // }

    public function deactivate($id){
        $users = User::where('id', $id)
        ->update(['active' => 0]);
        return redirect('/admin/user');
        // dd($users);
    }
    public function activate($id){
        $users = User::where('id', $id)
        ->update(['active' => 1]);
        return redirect('/admin/user');
        // dd($users);
    }

    public function sessions(Request $request)
    {
        if (config('session.driver') !== 'database') {
            return collect();
        }

        return collect(
            DB::connection(config('session.connection'))->table(config('session.table', 'sessions'))
                    ->where('user_id', $request->user()->getAuthIdentifier())
                    ->orderBy('last_activity', 'desc')
                    ->get()
        )->map(function ($session) use ($request) {
            $agent = $this->createAgent($session);

            return (object) [
                'agent' => [
                    'is_desktop' => $agent->isDesktop(),
                    'platform' => $agent->platform(),
                    'browser' => $agent->browser(),
                ],
                'ip_address' => $session->ip_address,
                'is_current_device' => $session->id === $request->session()->getId(),
                'last_active' => Carbon::createFromTimestamp($session->last_activity)->diffForHumans(),
            ];
        });
    }

    protected function createAgent($session)
    {
        return tap(new Agent, function ($agent) use ($session) {
            $agent->setUserAgent($session->user_agent);
        });
    }
}
