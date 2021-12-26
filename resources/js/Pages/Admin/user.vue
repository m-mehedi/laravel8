<template>
    <app-layout title="Dashboard">
        <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template> -->

        

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1 class="font-semibold text-center text-2xl text-green-800 leading-tight">
                        Dashboard
                    </h1>
                    <h2 class="font-semibold text-center text-xl text-amber-800 leading-tight">
                        Personalize your account
                    </h2>
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div v-if="$page.props.jetstream.canUpdateProfileInformation">
                    <update-profile-information-form :user="$page.props.user" />

                    <jet-section-border />
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'
    import UpdateProfileInformationForm from '@/Pages/Profile/Partials/UpdateProfileInformationForm.vue'

    export default defineComponent({
        components: {
            AppLayout,
            Welcome,
            UpdateProfileInformationForm,
        },
    })
</script>
