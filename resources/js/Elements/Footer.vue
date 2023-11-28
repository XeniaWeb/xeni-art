<script setup>
import SocialLink from '@/Components/SocialLink.vue'
import AppLogoXeniaWeb from '@/Components/AppLogoXeniaWeb.vue'

import { Link } from '@inertiajs/vue3'
</script>

<template>
  <footer class="grid-footer bg-white/40 mt-auto border-t">
    <div class="wrapper">
      <div class="relative flex justify-between py-4">
        <div class="flex">
          <ul
            class="flex mr-auto pt-1 pr-4 justify-start items-center align-middle flex-wrap sm:flex-nowrap"
          >
            <SocialLink href="https://www.linkedin.com/in/xeniaweb" title="Xenia on Linkedin">
              <svg width="15.74" height="15.05" class="w-auto h-8 sm:h-4" viewBox="0 0 15.74 15.05">
                <path
                  class="fill-greenGray-dark group-hover:fill-greenGray-light/50"
                  d="M15.87,15.52V9.7c0-3.12-1.66-4.57-3.88-4.57A3.36,3.36,0,0,0,8.94,6.81V5.37H5.57c0,1,0,10.15,0,10.15H8.94V9.85A2.29,2.29,0,0,1,9.06,9,1.82,1.82,0,0,1,10.79,7.8c1.22,0,1.71.93,1.71,2.29v5.44ZM2,4A1.76,1.76,0,1,0,2,.47,1.76,1.76,0,1,0,2,4ZM3.7,15.52V5.37H.33V15.52Z"
                  transform="translate(-0.13 -0.47)"
                />
              </svg>
            </SocialLink>
            <SocialLink
              href="https://www.youtube.com/channel/UCKSXl_LlBNShvPMrxCDIcYw"
              title="Xenia on Youtube"
            >
              <svg
                x="0px"
                y="0px"
                width="19.979px"
                height="14.015px"
                class="w-auto h-8 sm:h-4"
                viewBox="0 0 19.979 14.015"
              >
                <path
                  class="fill-greenGray-dark group-hover:fill-greenGray-light/50"
                  d="M17.145,0H2.835C1.275,0,0,1.275,0,2.835v8.345c0,1.56,1.275,2.835,2.835,2.835h14.31c1.56,0,2.835-1.275,2.835-2.835V2.835 C19.979,1.275,18.704,0,17.145,0z M7.036,10.392V3.623l6.769,3.384L7.036,10.392z"
                />
              </svg>
            </SocialLink>
          </ul>
        </div>
        <div
          class="group block cursor-pointer sm:flex justify-center items-center py-3 align-middle focus:outline-2 focus:outline-offset-1 focus:outline-orange-200 focus:outline-double"
        >
          <small class="block text-center sm:text-left py-2 mr-3 group-hover:text-blue-950/50"
            >developed by
          </small>
          <a
            class="cursor-pointer z-50focus:outline-2 focus:outline-offset-1 focus:outline-orange-200 focus:outline-double"
            href="https://xeniaweb.ch/"
            target="_blank"
            title="Xenia WEB"
          >
            <span class="sr-only">Oksana Burki</span>
            <AppLogoXeniaWeb
              color-web="blue-950"
              class="w-auto h-12 sm:h-10 group-hover:fill-blue-950/50"
            />
          </a>
        </div>
      </div>
    </div>
  </footer>
</template>

<style scoped>
.grid-footer {
  grid-area: footer;
}
</style>
