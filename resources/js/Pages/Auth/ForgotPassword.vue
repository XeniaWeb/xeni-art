<script setup>
import AppGuestLayout from "@/Layouts/AppGuestLayout.vue";
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import {Head, useForm} from '@inertiajs/vue3'

defineProps({
  status: {
    type: String
  }
})

const form = useForm({
  email: ''
})

const submit = () => {
  form.post(route('password.email'))
}
</script>

<template>
  <AppGuestLayout>
    <Head title="Forgot Password" />

    <div v-if="status" class="flex justify-center mb-4 font-medium text-sm text-lime-700">
      {{ status }}
    </div>
    <div class="flex items-center p-6 bg-gray-50 dark:bg-gray-900">
      <div
        class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
      >
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img
              aria-hidden="true"
              class="object-cover w-full h-full dark:hidden"
              src="/images/auth-img/forgot-password-office.jpeg"
              alt="Office"
            />
            <img
              aria-hidden="true"
              class="hidden object-cover w-full h-full dark:block"
              src="/images/auth-img/forgot-password-office-dark.jpeg"
              alt="Office"
            />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1
                class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
              >
                Forgot password
              </h1>

              <div class="mb-4 text-sm text-gray-600">
                Forgot your password? No problem. Just let us know your email address and we will email you a
                password reset link that will allow you to choose a new one.
              </div>

              <form @submit.prevent="submit">
                <div>
                  <InputLabel for="email" value="Email"/>

                  <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                  />

                  <InputError class="mt-2" :message="form.errors.email"/>
                </div>

                <div class="flex items-center justify-end mt-4">
                  <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Recover password
                  </PrimaryButton>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AppGuestLayout>
</template>
