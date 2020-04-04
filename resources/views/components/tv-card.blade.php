<div class="mt-8">
  <a href="{{ route('tv.show', $tv['id']) }}">
    <img src="https://image.tmdb.org/t/p/w500{{ $tv['poster_path'] }}" alt="{{ $tv['name'] }}" class="hover:opacity-50 transition ease-in-out duration-150">
  </a>
  <div class="mt-2">
  <a href="{{ route('tv.show', $tv['id']) }}" class="text-lg mt-2 hover:text-gray-300">{{ Str::of($tv['name'])->limit(20) }}</a>
    <div class="flex items-center tex-gray-400 text-sm mt-1">
      <svg class="w-4" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><linearGradient id="a" x1="236.94" x2="236.94" y1="458.43" y2="-71.182" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFCF95" offset="0"/><stop stop-color="#FFC954" offset=".427"/><stop stop-color="#FFC200" offset="1"/></linearGradient><path d="M274.84 23.212l67.722 137.22 151.43 22.004c17.232 2.503 24.112 23.68 11.644 35.835l-109.58 106.81 25.867 150.82c2.944 17.162-15.07 30.25-30.482 22.147l-135.44-71.206-135.44 71.206c-15.412 8.102-33.426-4.985-30.482-22.147l25.867-150.82-109.58-106.81c-12.469-12.155-5.588-33.33 11.644-35.835l151.43-22.004 67.721-137.22c7.707-15.615 29.972-15.615 37.679 0z" fill="url(#a)"/><linearGradient id="b" x1="361.34" x2="201.24" y1="390.13" y2="390.13" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFC200" stop-opacity="0" offset="0"/><stop stop-color="#fb0" stop-opacity=".203" offset=".203"/><stop stop-color="#FFA700" stop-opacity=".499" offset=".499"/><stop stop-color="#f80" stop-opacity=".852" offset=".852"/><stop stop-color="#FF7800" offset="1"/></linearGradient><path d="M342.56 160.43L274.84 23.21c-3.853-7.807-11.346-11.711-18.839-11.711v259.79l86.559-110.86z" fill="url(#b)"/><linearGradient id="c" x1="388.69" x2="346.29" y1="144.84" y2="353.64" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFC200" stop-opacity="0" offset="0"/><stop stop-color="#fb0" stop-opacity=".203" offset=".203"/><stop stop-color="#FFA700" stop-opacity=".499" offset=".499"/><stop stop-color="#f80" stop-opacity=".852" offset=".852"/><stop stop-color="#FF7800" offset="1"/></linearGradient><path d="M396.06 325.08l109.58-106.81c6.151-5.996 7.586-14.185 5.399-21.247l-255.03 74.269 140.06 53.788z" fill="url(#c)"/><linearGradient id="d" x1="183.1" x2="349.16" y1="35.109" y2="201.17" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFC200" stop-opacity="0" offset="0"/><stop stop-color="#fb0" stop-opacity=".203" offset=".203"/><stop stop-color="#FFA700" stop-opacity=".499" offset=".499"/><stop stop-color="#f80" stop-opacity=".852" offset=".852"/><stop stop-color="#FF7800" offset="1"/></linearGradient><path d="M413.63 496.39L256 271.29v155.55l135.44 71.206c7.734 4.066 16.121 2.794 22.188-1.648z" fill="url(#d)"/><linearGradient id="e" x1="64.678" x2="187.08" y1="245.11" y2="142.71" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFC200" stop-opacity="0" offset="0"/><stop stop-color="#fb0" stop-opacity=".203" offset=".203"/><stop stop-color="#FFA700" stop-opacity=".499" offset=".499"/><stop stop-color="#f80" stop-opacity=".852" offset=".852"/><stop stop-color="#FF7800" offset="1"/></linearGradient><path d="M256 271.29l-140.06 53.788-25.866 150.82c-1.467 8.55 2.271 16.087 8.294 20.499l157.63-225.1z" fill="url(#e)"/><linearGradient id="f" x1="156.43" x2="106.83" y1="414.02" y2="273.22" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFC200" stop-opacity="0" offset="0"/><stop stop-color="#fb0" stop-opacity=".203" offset=".203"/><stop stop-color="#FFA700" stop-opacity=".499" offset=".499"/><stop stop-color="#f80" stop-opacity=".852" offset=".852"/><stop stop-color="#FF7800" offset="1"/></linearGradient><path d="M.968 197.02l255.03 74.268-86.56-110.86-151.43 22.005C9.277 183.701 3.211 189.766.965 197.02z" fill="url(#f)"/><linearGradient id="g" x1="343.14" x2="-21.26" y1="399.32" y2="244.12" gradientTransform="matrix(1.0667 0 0 -1.0667 3.267 557.54)" gradientUnits="userSpaceOnUse"><stop stop-color="#FFC200" stop-opacity="0" offset="0"/><stop stop-color="#fb0" stop-opacity=".203" offset=".203"/><stop stop-color="#FFA700" stop-opacity=".499" offset=".499"/><stop stop-color="#f80" stop-opacity=".852" offset=".852"/><stop stop-color="#FF7800" offset="1"/></linearGradient><path d="M115.94 325.08L6.36 218.27c-6.151-5.996-7.586-14.185-5.399-21.247l255.03 74.268-140.06 53.788z" fill="url(#g)"/></svg>
      <span class="ml-1">{{ $tv['vote_average']*10 }}%</span>
      <span class="mx-2">|</span>
      <svg class="w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999"><path d="M412.41 0H99.589C47.531 0 5.332 42.201 5.332 94.257v205.172c0 52.057 42.201 94.257 94.257 94.257h44.894a3.867 3.867 0 013.867 3.867V498.76c0 11.966 14.637 17.768 22.834 9.05l106.188-112.906a3.866 3.866 0 012.818-1.218h132.22c52.057 0 94.257-42.201 94.257-94.257V94.257C506.667 42.201 464.466 0 412.41 0z" fill="#ec5569"/><path d="M188.005 358.509c0-2.249-1.676-4.072-3.744-4.072h-43.462c-50.396 0-91.25-44.439-91.25-99.257V39.123c0-9.276 1.174-18.253 3.361-26.77C24.489 28.587 5.332 59.184 5.332 94.257v205.172c0 52.056 42.201 94.257 94.257 94.257h44.894a3.867 3.867 0 013.867 3.867V498.76c0 11.966 14.637 17.768 22.834 9.05l16.82-17.885V358.509h.001z" fill="#e63950"/><path d="M361.908 122.325c-23.931-23.931-62.731-23.931-86.663 0l-13.518 13.518a8.255 8.255 0 01-11.673 0l-13.302-13.302c-23.931-23.931-62.731-23.931-86.663 0-23.931 23.931-23.931 62.731 0 86.663l99.973 99.973a8.255 8.255 0 0011.673 0l100.172-100.189c23.932-23.932 23.932-62.731.001-86.663z" fill="#ec5569"/><path d="M361.908 122.325c-23.931-23.931-62.731-23.931-86.663 0l-13.518 13.518a8.255 8.255 0 01-11.673 0l-13.302-13.302c-23.931-23.931-62.731-23.931-86.663 0-23.931 23.931-23.931 62.731 0 86.663l99.973 99.973a8.255 8.255 0 0011.673 0l100.172-100.189c23.932-23.932 23.932-62.731.001-86.663z" fill="#fff5f5"/><path d="M182.145 209.204c-23.931-23.931-23.931-62.731 0-86.663a60.966 60.966 0 0127.303-15.807c-20.486-5.532-43.278-.274-59.358 15.807-23.931 23.931-23.931 62.731 0 86.663l99.973 99.973a8.255 8.255 0 0011.673 0l10.19-10.192-89.781-89.781z" fill="#dce6eb"/></svg>
      <span class="ml-2">{{ $tv['popularity']}}</span>
      <span class="mx-2">|</span>
      <span>{{ \Carbon\Carbon::parse($tv['first_air_date'])->format('Y') }}</span>
    </div>
    <div class="text-gray-400 text-sm">@foreach($tv['genre_ids'] as $gi){{ $genreTv->get($gi) }}@if (!$loop->last),@endif @endforeach</div>
  </div>
</div>