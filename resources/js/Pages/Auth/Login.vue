<script setup>
import Checkbox from '@/Components/Checkbox.vue'
import AppGuestLayout from '@/Layouts/AppGuestLayout.vue'
import InputError from '@/Components/InputError.vue'
import InputLabel from '@/Components/InputLabel.vue'
import PrimaryButton from '@/Components/PrimaryButton.vue'
import TextInput from '@/Components/TextInput.vue'
import {Head, Link, useForm} from '@inertiajs/vue3'
import SecondaryButton from '@/Components/SecondaryButton.vue'

defineProps({
  canResetPassword: {
    type: Boolean
  },
  status: {
    type: String
  }
})

const form = useForm({
  email: '',
  password: '',
  remember: false
})

const submit = () => {
  form.post(route('login'), {
    onFinish: () => form.reset('password')
  })
}
</script>

<template>
  <AppGuestLayout>
    <Head title="LogIn"/>

    <div v-if="status" class="flex justify-center mb-4 font-medium text-sm text-green-600">
      {{ status }}
    </div>

    <form @submit.prevent="submit">
      <div class="flex items-center p-6">
        <div
          class="flex-1 h-full max-w-md md:max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800"
        >
          <div class="flex flex-col overflow-y-auto md:flex-row">
            <div class="h-32 md:h-auto md:w-1/2">
              <img
                aria-hidden="true"
                class="object-cover w-full h-full dark:hidden"
                src="/images/auth-img/login-office.jpeg"
                alt="Office"
              />
              <img
                aria-hidden="true"
                class="hidden object-cover w-full h-full dark:block"
                src="/images/auth-img/login-office-dark.jpeg"
                alt="Office"
              />
            </div>
            <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
              <div class="w-full">
                <h1
                  class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
                >
                  Login
                </h1>
                <div>
                  <InputLabel for="email" value="Email"/>
                  <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="off"
                  />
                  <InputError class="mt-2" :message="form.errors.email"/>
                </div>
                <div class="mt-4">
                  <InputLabel for="password" value="Password"/>

                  <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full "
                    v-model="form.password"
                    required
                    autocomplete="off"
                  />
                  <InputError class="mt-2" :message="form.errors.password"/>
                </div>
                <div class="mt-4 ">
                  <PrimaryButton
                    class="flex justify-center w-full"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                  >
                    Log in
                  </PrimaryButton>
                </div>
                <div class="block mt-4">
                  <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember"/>
                    <span class="ms-2 text-sm text-primary">Remember me</span>
                  </label>
                </div>
                <hr class="my-8"/>
                <div class="mt-4">
                  <SecondaryButton
                    class="flex items-center justify-center w-full leading-3  fill-current hover:text-lime-700 hover:fill-lime-700">
                    <svg
                      class="w-4 h-4 mr-2"
                      aria-hidden="true"
                      viewBox="0 0 24 24"
                      fill="current"
                    >
                      <path
                        d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                      />
                    </svg>
                    GitHub
                  </SecondaryButton>
                </div>
                <div class="mt-4">
                  <SecondaryButton
                    class=" flex items-center justify-center w-full leading-3 fill-current hover:text-lime-700 hover:fill-lime-700">
                    <svg
                      class="w-4 h-4 mr-2"
                      aria-hidden="true"
                      viewBox="0 0 256 256"
                      fill="current"
                    >
                      <g>
                        <path
                          d="M0 18.338C0 8.216 8.474 0 18.92 0h218.16C247.53 0 256 8.216 256 18.338v219.327C256 247.79 247.53 256 237.08 256H18.92C8.475 256 0 247.791 0 237.668V18.335z"/>
                        <path
                          d="M77.796 214.238V98.986H39.488v115.252H77.8zM58.65 83.253c13.356 0 21.671-8.85 21.671-19.91-.25-11.312-8.315-19.915-21.417-19.915-13.111 0-21.674 8.603-21.674 19.914 0 11.06 8.312 19.91 21.169 19.91h.248zM99 214.238h38.305v-64.355c0-3.44.25-6.889 1.262-9.346 2.768-6.885 9.071-14.012 19.656-14.012 13.858 0 19.405 10.568 19.405 26.063v61.65h38.304v-66.082c0-35.399-18.896-51.872-44.099-51.872-20.663 0-29.738 11.549-34.78 19.415h.255V98.99H99.002c.5 10.812-.003 115.252-.003 115.252z"
                          fill="#fff"/>
                      </g>
                    </svg>
                    LinkedIn
                  </SecondaryButton>
                </div>

                <p class="mt-4">
                  <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="text-base text-primary hover:text-lime-700 rounded-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary dark:text-lime-500 hover:underline"
                  >
                    Forgot your password?
                  </Link>
                </p>
                <p class="mt-1">
                  <Link
                    :href="route('register')"
                    class="text-base text-primary hover:text-lime-700 rounded-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary dark:text-lime-500 hover:underline"
                  >
                    Create account
                  </Link>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </AppGuestLayout>
</template>
