<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.absolute{position:absolute}.relative{position:relative}.-left-20{left:-5rem}.top-0{top:0px}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.grid{display:grid}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-\[calc\(100\%\+8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.max-w-\[877px\]{max-width:877px}.max-w-2xl{max-width:42rem}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.gap-2{gap:0.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-sm{border-radius:0.125rem}.bg-\[\#FF2D20\]\/10{background-color:rgb(255 45 32 / 0.1)}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from:transparent var(--tw-gradient-from-position);--tw-gradient-to:rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to:#fff var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#FF2D20}.object-cover{object-fit:cover}.object-top{object-position:top}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.pt-3{padding-top:0.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:0.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-semibold{font-weight:600}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\]{--tw-shadow:0px 14px 34px 0px rgba(0,0,0,0.08);--tw-shadow-colored:0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-transparent{--tw-ring-color:transparent}.ring-white\/\[0\.05\]{--tw-ring-color:rgb(255 255 255 / 0.05)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\]{--tw-drop-shadow:drop-shadow(0px 4px 34px rgba(0,0,0,0.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity:1;background-color:rgb(255 45 32 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-black:hover{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.hover\:text-black\/70:hover{color:rgb(0 0 0 / 0.7)}.hover\:ring-black\/20:hover{--tw-ring-color:rgb(0 0 0 / 0.2)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}@media (min-width: 640px){.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.lg\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0px}.lg\:text-\[\#FF2D20\]{--tw-text-opacity:1;color:rgb(255 45 32 / var(--tw-text-opacity))}}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.dark\:bg-zinc-900{--tw-bg-opacity:1;background-color:rgb(24 24 27 / var(--tw-bg-opacity))}.dark\:via-zinc-900{--tw-gradient-to:rgb(24 24 27 / 0)  var(--tw-gradient-to-position);--tw-gradient-stops:var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to:#18181b var(--tw-gradient-to-position)}.dark\:text-white\/50{color:rgb(255 255 255 / 0.5)}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-white\/70{color:rgb(255 255 255 / 0.7)}.dark\:ring-zinc-800{--tw-ring-opacity:1;--tw-ring-color:rgb(39 39 42 / var(--tw-ring-opacity))}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:hover\:text-white\/70:hover{color:rgb(255 255 255 / 0.7)}.dark\:hover\:text-white\/80:hover{color:rgb(255 255 255 / 0.8)}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity:1;--tw-ring-color:rgb(63 63 70 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 45 32 / var(--tw-ring-opacity))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity:1;--tw-ring-color:rgb(255 255 255 / var(--tw-ring-opacity))}}
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="https://laravel.com/assets/img/welcome/background.svg" />
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                          
<!-- Created with Inkscape (http://www.inkscape.org/) -->

<svg
   xmlns:i="http://ns.adobe.com/AdobeIllustrator/10.0/"
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:xlink="http://www.w3.org/1999/xlink"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="156.72211"
   height="100.4875"
   viewBox="0 0 156.72211 233.4875"
   id="svg2"
   version="1.1"
   inkscape:version="0.91 r13725"
   sodipodi:docname="bubbleman-courier.svg">
  <title
     id="title15186">Bubble Messenger / </title>
  <defs
     id="defs4">
    <linearGradient
       inkscape:collect="always"
       x1="1343"
       y1="599.21997"
       x2="1331"
       gradientUnits="userSpaceOnUse"
       y2="583.82001"
       id="linearGradient4481"
       gradientTransform="matrix(0.51554625,0,0,0.51554625,-358.57276,-174.35531)">
      <stop
         offset="0"
         style="stop-color:#ff0000"
         id="stop4437" />
      <stop
         offset="1"
         style="stop-color:#800000"
         id="stop4439" />
    </linearGradient>
    <linearGradient
       inkscape:collect="always"
       xlink:href="#linearGradient6684"
       id="linearGradient6690"
       x1="294.23245"
       y1="170.79314"
       x2="297.63428"
       y2="181.03671"
       gradientUnits="userSpaceOnUse"
       gradientTransform="translate(-1.0101525,0.75761441)" />
    <linearGradient
       inkscape:collect="always"
       id="linearGradient6684">
      <stop
         style="stop-color:#888888;stop-opacity:1"
         offset="0"
         id="stop6686" />
      <stop
         style="stop-color:#dedede;stop-opacity:1"
         offset="1"
         id="stop6688" />
    </linearGradient>
    <filter
       inkscape:collect="always"
       style="color-interpolation-filters:sRGB"
       id="filter6754"
       x="-0.067028418"
       width="1.1340568"
       y="-0.14867729"
       height="1.2973546">
      <feGaussianBlur
         inkscape:collect="always"
         stdDeviation="1.0622807"
         id="feGaussianBlur6756" />
    </filter>
    <linearGradient
       inkscape:collect="always"
       xlink:href="#linearGradient6684"
       id="linearGradient6760"
       gradientUnits="userSpaceOnUse"
       gradientTransform="translate(4.7041332,30.2219)"
       x1="294.23245"
       y1="170.79314"
       x2="297.63428"
       y2="181.03671" />
    <linearGradient
       inkscape:collect="always"
       xlink:href="#linearGradient6684"
       id="linearGradient6764"
       gradientUnits="userSpaceOnUse"
       gradientTransform="translate(41.574701,17.594993)"
       x1="294.23245"
       y1="170.79314"
       x2="297.63428"
       y2="181.03671" />
    <linearGradient
       inkscape:collect="always"
       xlink:href="#linearGradient6684"
       id="linearGradient6768"
       gradientUnits="userSpaceOnUse"
       gradientTransform="translate(-7.6217276,18.755707)"
       x1="294.23245"
       y1="170.79314"
       x2="297.63428"
       y2="181.03671" />
    <linearGradient
       inkscape:collect="always"
       xlink:href="#linearGradient6684"
       id="linearGradient6807"
       gradientUnits="userSpaceOnUse"
       gradientTransform="translate(1.4211373,103.45796)"
       x1="294.23245"
       y1="170.79314"
       x2="297.63428"
       y2="181.03671" />
    <linearGradient
       inkscape:collect="always"
       xlink:href="#linearGradient6672"
       id="linearGradient6680"
       x1="316.41998"
       y1="142.64142"
       x2="326.3486"
       y2="155.49857"
       gradientUnits="userSpaceOnUse" />
    <linearGradient
       inkscape:collect="always"
       id="linearGradient6672">
      <stop
         style="stop-color:#c2c2c2;stop-opacity:1"
         offset="0"
         id="stop6674" />
      <stop
         style="stop-color:#ededed;stop-opacity:1"
         offset="1"
         id="stop6676" />
    </linearGradient>
    <linearGradient
       inkscape:collect="always"
       x1="1237.2"
       y1="574.92999"
       x2="1312.1"
       gradientUnits="userSpaceOnUse"
       y2="563.66998"
       id="linearGradient4511"
       gradientTransform="matrix(0.51554625,0,0,0.51554625,-358.57276,-174.35531)">
      <stop
         offset="0"
         style="stop-color:#7f0000"
         id="stop4515" />
      <stop
         offset=".37290"
         style="stop-color:#ff0000"
         id="stop4519" />
      <stop
         offset=".61295"
         style="stop-color:#ff0000"
         id="stop4521" />
      <stop
         offset="1"
         style="stop-color:#800000"
         id="stop4517" />
    </linearGradient>
    <clipPath
       clipPathUnits="userSpaceOnUse"
       id="clipPath6668">
      <path
         style="fill:none;fill-rule:evenodd;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
         d="m 318.36033,136.43799 0.12775,-0.21398 1.12165,-1.24441 1.84152,-0.68639 3.77232,-0.49107 0.0614,0.0781 0.54687,0.93192 -0.16183,0.53571 -1.25,5.32925 16.25,-2.32143 3.92857,-15.53572 -20.71428,-34.821426 -50.53572,6.071429 -10.53571,42.857147 8.03571,24.10714 49.82142,-8.57143 z"
         id="path6670"
         inkscape:connector-curvature="0" />
    </clipPath>
    <filter
       inkscape:collect="always"
       id="filter4423">
      <feGaussianBlur
         inkscape:collect="always"
         stdDeviation="0.526641"
         id="feGaussianBlur4425" />
    </filter>
    <filter
       inkscape:collect="always"
       x="-0.069457002"
       y="-0.15538"
       width="1.1389"
       height="1.3108"
       id="filter4415">
      <feGaussianBlur
         inkscape:collect="always"
         stdDeviation="1.2650547"
         id="feGaussianBlur4417" />
    </filter>
    <filter
       inkscape:collect="always"
       x="-0.052558001"
       y="-0.19361"
       width="1.1051"
       height="1.3872"
       id="filter4427">
      <feGaussianBlur
         inkscape:collect="always"
         stdDeviation="0.72610129"
         id="feGaussianBlur4429" />
    </filter>
    <filter
       inkscape:collect="always"
       id="filter4431">
      <feGaussianBlur
         inkscape:collect="always"
         stdDeviation="0.72610129"
         id="feGaussianBlur4433" />
    </filter>
    <filter
       inkscape:collect="always"
       x="-0.11819"
       y="-0.12187"
       width="1.2364"
       height="1.2437"
       id="filter4507">
      <feGaussianBlur
         inkscape:collect="always"
         stdDeviation="0.63679176"
         id="feGaussianBlur4509" />
    </filter>
    <filter
       inkscape:collect="always"
       id="filter4528">
      <feGaussianBlur
         inkscape:collect="always"
         stdDeviation="1.4761757"
         id="feGaussianBlur4530" />
    </filter>
    <filter
       inkscape:collect="always"
       x="-0.033357002"
       y="-0.29811999"
       width="1.0667"
       height="1.5962"
       id="filter4560">
      <feGaussianBlur
         inkscape:collect="always"
         stdDeviation="0.74965667"
         id="feGaussianBlur4562" />
    </filter>
    <filter
       inkscape:collect="always"
       x="-0.052437998"
       y="-0.22148"
       width="1.1049"
       height="1.443"
       id="filter4568">
      <feGaussianBlur
         inkscape:collect="always"
         stdDeviation="0.52198875"
         id="feGaussianBlur4570" />
    </filter>
    <filter
       inkscape:collect="always"
       x="-0.071355"
       y="-0.70331001"
       width="1.1427"
       height="2.4066"
       id="filter4564">
      <feGaussianBlur
         inkscape:collect="always"
         stdDeviation="0.52198875"
         id="feGaussianBlur4566" />
    </filter>
    <filter
       inkscape:collect="always"
       x="-0.101"
       y="-0.25073999"
       width="1.202"
       height="1.5015"
       id="filter4452">
      <feGaussianBlur
         inkscape:collect="always"
         stdDeviation="0.98270022"
         id="feGaussianBlur4454" />
    </filter>
    <linearGradient
       inkscape:collect="always"
       xlink:href="#linearGradient9512-3"
       id="linearGradient9532"
       gradientUnits="userSpaceOnUse"
       gradientTransform="translate(47.321429,2.5)"
       spreadMethod="reflect"
       x1="269.66306"
       y1="222.09274"
       x2="269.8602"
       y2="214.7713" />
    <linearGradient
       id="linearGradient9512-3"
       inkscape:collect="always">
      <stop
         id="stop9528"
         offset="0"
         style="stop-color:#ffffff;stop-opacity:1;" />
      <stop
         id="stop9530"
         offset="1"
         style="stop-color:#cccccc;stop-opacity:1" />
    </linearGradient>
    <linearGradient
       inkscape:collect="always"
       xlink:href="#linearGradient9512-3"
       id="linearGradient9522"
       gradientUnits="userSpaceOnUse"
       spreadMethod="reflect"
       x1="295.19876"
       y1="254.41417"
       x2="300.75305"
       y2="253.69987"
       gradientTransform="translate(47.321429,2.5)" />
    <clipPath
       clipPathUnits="userSpaceOnUse"
       id="clipPath14148">
      <path
         style="fill:none;fill-rule:evenodd;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
         d="m 329.59857,209.42714 c 0.17857,-0.71428 13.39286,-9.10714 13.39286,-9.10714 l 23.75,86.25 c 0,0 -25.89286,11.96428 -26.60714,10.53571 -0.71429,-1.42857 -10.53572,-87.67857 -10.53572,-87.67857 z"
         id="path14150"
         inkscape:connector-curvature="0" />
    </clipPath>
    <linearGradient
       inkscape:collect="always"
       xlink:href="#linearGradient9512-3"
       id="linearGradient9518"
       x1="295.19876"
       y1="254.41417"
       x2="300.75305"
       y2="253.69987"
       gradientUnits="userSpaceOnUse"
       spreadMethod="reflect" />
    <linearGradient
       inkscape:collect="always"
       x1="1788.1"
       y1="704.37"
       gradientTransform="matrix(2.5111,0,0,2.5111,-4464.8,-1730.2)"
       x2="1835.6"
       gradientUnits="userSpaceOnUse"
       y2="695.62"
       id="linearGradient3504">
      <stop
         offset="0"
         style="stop-color:#dccb94"
         id="stop3367" />
      <stop
         offset="1"
         style="stop-color:#c4a95a"
         id="stop3369" />
    </linearGradient>
    <linearGradient
       inkscape:collect="always"
       x1="1834"
       y1="754.31"
       gradientTransform="matrix(2.5111,0,0,2.5111,-4464.8,-1730.2)"
       x2="1828.8"
       gradientUnits="userSpaceOnUse"
       y2="707.71002"
       id="linearGradient3501">
      <stop
         offset="0"
         style="stop-color:#a28650"
         id="stop3375" />
      <stop
         offset="1"
         style="stop-color:#dac491"
         id="stop3377" />
    </linearGradient>
    <linearGradient
       inkscape:collect="always"
       x1="1779.5"
       y1="721.07001"
       gradientTransform="matrix(2.5111,0,0,2.5111,-4465.6,-1731)"
       x2="1800.9"
       gradientUnits="userSpaceOnUse"
       y2="722.69"
       id="linearGradient3498">
      <stop
         offset="0"
         style="stop-color:#bb9652"
         id="stop3359" />
      <stop
         offset="1"
         style="stop-color:#d4bf8a"
         id="stop3361" />
    </linearGradient>
  </defs>
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="0.35"
     inkscape:cx="-530.92467"
     inkscape:cy="-117.54197"
     inkscape:document-units="px"
     inkscape:current-layer="layer1"
     showgrid="false"
     units="px"
     inkscape:window-width="1600"
     inkscape:window-height="1124"
     inkscape:window-x="0"
     inkscape:window-y="24"
     inkscape:window-maximized="1"
     fit-margin-top="0"
     fit-margin-left="0"
     fit-margin-right="0"
     fit-margin-bottom="0" />
  <metadata
     id="metadata7">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title>Bubble Messenger / </dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Ebene 1"
     inkscape:groupmode="layer"
     id="layer1"
     transform="translate(-727.35323,-218.47555)">
    <g
       transform="translate(488.79403,110.44314)"
       id="g14154">
      <g
         id="g14130"
         transform="matrix(-0.21691041,0,0,0.21691041,550.90709,294.28056)">
        <path
           inkscape:connector-curvature="0"
           id="path14132"
           d="m 857.3872,182.905 c 0,0 12.6269,6.06092 23.2335,5.05077 10.60661,-1.01016 19.69798,-3.53554 21.21321,-15.15229 1.51523,-11.61676 6.06091,-33.33504 3.53553,-44.44671 -2.52538,-11.11168 -1.51523,-37.375647 -16.66752,-36.870567 -15.15228,0.50507 -27.77919,6.06091 -34.34518,23.738577 -6.56599,17.67767 -13.13199,17.67767 -10.10153,34.85027 3.03046,17.17259 13.13199,32.82995 13.13199,32.82995 z"
           style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
        <path
           id="path14134"
           i:knockout="Off"
           d="m 876.07089,124.44569 c -3.388,-11.298 -9.036,-10.166 -12.99,0 -3.39,19.77 -4.521,50.272 6.213,53.66 0,0 9.602,-5.084 9.036,-14.686 -3.389,5.647 -7.906,15.25 -10.167,2.823 l 10.167,-6.778 -4.519,-5.647 -7.908,0.564 c 0,0 -2.257,-9.602 -1.128,-17.51 1.128,-7.908 4.519,2.824 4.519,2.824 l 0,9.602 3.39,-1.129 c 0,0 -3.842,-1.996 5.646,-6.214 5.084,-2.259 -6.212,-2.259 -6.212,-2.259 0,0 -0.565,-2.26 6.212,-2.824 l -1.693,-3.955 -10.733,-6.777 c 0,0.03 1.69,-12.4 10.16,-1.67 z"
           inkscape:connector-curvature="0"
           style="fill:#807b88" />
      </g>
      <g
         transform="translate(-11.785714,-0.35714286)"
         id="g6811">
        <path
           d="m 332.67165,126.01225 c -1.03109,0.0361 -2.16529,0.31448 -3.4026,0.90736 -2.88706,1.35588 -6.23811,4.25841 -9.79538,8.21265 6.80521,-2.10343 12.27,-1.39713 18.86899,-2.56227 2.06219,-0.36603 1.54664,-1.71161 1.18576,-2.38182 -0.15467,-0.30417 -0.30933,-0.59803 -0.46399,-0.87127 0,-0.0155 -0.0516,-0.0309 -0.0516,-0.0464 -0.72176,-0.9383 -1.90752,-2.34574 -4.58836,-3.06235 -0.5671,-0.1495 -1.1342,-0.21137 -1.75286,-0.1959 z"
           style="fill:url(#linearGradient4481);fill-rule:evenodd"
           id="path4275"
           inkscape:connector-curvature="0" />
        <path
           style="fill:#ededed;fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
           d="m 291.95431,168.25779 c 0,0.63135 2.77792,2.52539 -0.50508,4.54569 -3.28299,2.02031 -13.13198,1.51523 -15.53109,3.78807 -2.39911,2.27285 -16.66752,11.11168 -13.51079,16.66752 3.15672,5.55584 15.9099,8.08122 15.9099,8.08122 0,0 -3.15673,24.36993 -6.56599,34.85026 -3.40927,10.48034 -4.41942,28.66308 -6.06092,29.92577 -1.64149,1.26269 -7.44987,-1.51523 -11.23794,3.53554 -3.78808,5.05076 -5.68211,27.90546 -0.12627,30.68338 5.55584,2.77792 9.97525,3.53553 12.6269,0.63134 2.65165,-2.90418 1.2627,-19.82424 1.2627,-19.82424 0,0 2.27284,0.88388 5.55583,-2.52538 3.283,-3.40927 15.5311,-34.47146 18.68783,-34.47146 3.15672,0 12.87944,43.18403 9.97525,57.70497 -2.90419,14.52094 26.51651,18.94036 27.52666,16.41498 1.01015,-2.52538 4.16688,-10.98541 -1.51523,-14.39468 -5.68211,-3.40926 -6.31345,0.88389 -9.21764,-4.92449 -2.90419,-5.80838 -6.06092,-57.70496 -6.06092,-70.45814 0,-12.75318 1.01016,-32.57742 1.89404,-32.57742 0.88388,0 11.74302,11.11168 13.63706,11.74302 1.89403,0.63135 9.47018,-0.3788 9.47018,-0.3788 0,0 -1.38896,2.90418 1.89403,4.41941 3.283,1.51523 6.566,3.53554 10.60661,-1.38896 4.04061,-4.92449 4.29314,-9.34391 -0.37881,-12.50063 -4.67196,-3.15673 -3.53553,-3.283 -6.69226,-3.15673 -3.15673,0.12627 -8.08122,1.01015 -9.47018,0.25254 -1.38896,-0.75762 -11.99556,-13.13199 -15.27856,-14.39468 -3.28299,-1.26269 -9.84899,-3.15672 -10.35406,-6.81853 -0.50508,-3.6618 -3.40927,-6.9448 -3.40927,-6.9448 z"
           id="path6441"
           inkscape:connector-curvature="0" />
        <path
           style="opacity:0.719;fill:url(#linearGradient6690);fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;filter:url(#filter6754)"
           d="m 291.80271,170.89904 -0.71429,2.5 -9.46428,2.14285 -6.25,0.89286 -5.71429,5.17857 c 0,0 3.03571,4.82143 12.67857,4.64286 9.64286,-0.17857 18.21429,-0.17857 19.46429,-1.42857 1.25,-1.25 1.42857,-5.53572 2.32143,-6.60714 0.89285,-1.07143 3.57142,-2.85715 3.57142,-2.85715 l -1.60714,-6.25 z"
           id="path6682"
           inkscape:connector-curvature="0" />
        <path
           style="fill:none;fill-rule:evenodd;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
           d="m 284.94639,183.09441 c 0,0 -1.31051,2.97366 -1.57837,3.59866 -0.56822,1.32583 -2.08344,1.83091 -2.08344,1.83091"
           id="path6443"
           inkscape:connector-curvature="0"
           sodipodi:nodetypes="csc" />
        <path
           inkscape:connector-curvature="0"
           id="path6758"
           d="m 298.40986,206.43476 -7.67858,5.71428 -4.64285,-3.39286 -7.5,-6.78571 c -1.07143,3.03571 3.39365,21.25213 -2.5,11.42857 0,0 1.07142,6.42857 10.71428,6.25 0,0 10.77153,-3.47844 11.60715,-13.21428 z"
           style="opacity:0.41300001;fill:url(#linearGradient6760);fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;filter:url(#filter6754)"
           sodipodi:nodetypes="ccccccc" />
        <path
           style="fill:none;fill-rule:evenodd;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
           d="m 275.51766,187.21348 c 0,0 16.28871,3.78807 20.58186,6.18718 4.29315,2.39911 6.9448,8.08122 2.77792,12.62691 -4.16688,4.54568 -7.95495,9.09137 -12.75317,3.40926 -4.79823,-5.68211 -1.6415,-5.55584 -7.95496,-8.08122"
           id="path6445"
           inkscape:connector-curvature="0" />
        <path
           sodipodi:nodetypes="cccccc"
           style="opacity:0.272;fill:url(#linearGradient6764);fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;filter:url(#filter6754)"
           d="m 327.60185,199.52213 -4.64285,-3.39286 -7.5,-6.78571 c -1.07143,3.03571 8.39365,17.6807 2.5,7.85714 0,0 1.87499,9.01786 11.51785,8.83929 5.01032,-7.69917 -0.0198,-3.19952 -1.875,-6.51786 z"
           id="path6762"
           inkscape:connector-curvature="0" />
        <path
           inkscape:connector-curvature="0"
           id="path6766"
           d="m 278.40542,200.68284 -4.64285,-3.39286 -7.5,-6.78571 c -1.07143,3.03571 8.39365,17.6807 2.5,7.85714 0,0 1.87499,9.01786 11.51785,8.83929 5.01032,-7.69917 -0.0198,-3.19952 -1.875,-6.51786 z"
           style="opacity:0.272;fill:url(#linearGradient6768);fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;filter:url(#filter6754)"
           sodipodi:nodetypes="cccccc"
           transform="matrix(0.96047445,-0.27836816,0.27836816,0.96047445,-42.637379,79.754205)" />
        <path
           inkscape:connector-curvature="0"
           id="path6805"
           d="m 287.44829,285.3851 -4.64285,-3.39286 -7.5,-6.78571 c -1.07143,3.03571 8.39365,17.6807 2.5,7.85714 0,0 1.87499,9.01786 11.51785,8.83929 5.01032,-7.69917 -0.0198,-3.19952 -1.875,-6.51786 z"
           style="opacity:0.51000001;fill:url(#linearGradient6807);fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1;filter:url(#filter6754)"
           sodipodi:nodetypes="cccccc"
           transform="matrix(-0.13552793,1.041343,-0.69375579,-0.20343045,503.87184,44.258579)" />
        <path
           inkscape:connector-curvature="0"
           id="path6692"
           d="m 291.95431,168.25779 c 0,0.63135 2.77792,2.52539 -0.50508,4.54569 -3.28299,2.02031 -13.13198,1.51523 -15.53109,3.78807 -2.39911,2.27285 -16.66752,11.11168 -13.51079,16.66752 3.15672,5.55584 15.9099,8.08122 15.9099,8.08122 0,0 -3.15673,24.36993 -6.56599,34.85026 -3.40927,10.48034 -4.41942,28.66308 -6.06092,29.92577 -1.64149,1.26269 -7.44987,-1.51523 -11.23794,3.53554 -3.78808,5.05076 -5.68211,27.90546 -0.12627,30.68338 5.55584,2.77792 9.97525,3.53553 12.6269,0.63134 2.65165,-2.90418 1.2627,-19.82424 1.2627,-19.82424 0,0 2.27284,0.88388 5.55583,-2.52538 3.283,-3.40927 15.5311,-34.47146 18.68783,-34.47146 3.15672,0 12.87944,43.18403 9.97525,57.70497 -2.90419,14.52094 26.51651,18.94036 27.52666,16.41498 1.01015,-2.52538 4.16688,-10.98541 -1.51523,-14.39468 -5.68211,-3.40926 -6.31345,0.88389 -9.21764,-4.92449 -2.90419,-5.80838 -6.06092,-57.70496 -6.06092,-70.45814 0,-12.75318 1.01016,-32.57742 1.89404,-32.57742 0.88388,0 11.74302,11.11168 13.63706,11.74302 1.89403,0.63135 9.47018,-0.3788 9.47018,-0.3788 0,0 -1.38896,2.90418 1.89403,4.41941 3.283,1.51523 6.566,3.53554 10.60661,-1.38896 4.04061,-4.92449 4.29314,-9.34391 -0.37881,-12.50063 -4.67196,-3.15673 -3.53553,-3.283 -6.69226,-3.15673 -3.15673,0.12627 -8.08122,1.01015 -9.47018,0.25254 -1.38896,-0.75762 -11.99556,-13.13199 -15.27856,-14.39468 -3.28299,-1.26269 -9.84899,-3.15672 -10.35406,-6.81853 -0.50508,-3.6618 -3.40927,-6.9448 -3.40927,-6.9448 z"
           style="fill:none;fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
        <circle
           style="opacity:1;fill:url(#linearGradient6680);fill-opacity:1;fill-rule:nonzero;stroke:#000000;stroke-width:1;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1"
           id="path6439"
           cx="303.70572"
           cy="146.92714"
           r="25.714285" />
        <g
           id="g6788">
          <path
             inkscape:connector-curvature="0"
             id="path4283"
             style="fill:url(#linearGradient4511);fill-rule:evenodd"
             d="m 301.4811,109.16419 c -5.5679,0.0464 -11.1358,0.91252 -16.34281,3.28403 -2.57773,1.18061 -2.1653,1.68584 -1.39198,1.90237 2.1653,0.57226 6.90832,1.05171 9.58916,1.12905 l 0.10311,0 c 0,0.13404 -0.10311,0.2423 -0.25777,0.2423 -2.83551,-0.0361 -7.57853,-0.39697 -9.95004,-0.91767 -0.10311,-0.0309 -0.25778,-0.067 -0.41244,-0.11342 0,0.0258 0,0.0464 -0.0516,0.0773 -0.1031,0.232 -0.20621,0.48462 -0.36088,0.75786 0,0.0928 -0.0516,0.19075 -0.10311,0.2887 -0.0515,0.16498 -0.15466,0.3248 -0.20622,0.50008 -0.15466,0.39697 -0.30932,0.81972 -0.46399,1.25793 -0.30932,0.72177 -0.5671,1.49509 -0.82487,2.28903 -0.30933,0.79394 -0.5671,1.6085 -0.82487,2.41791 -0.0516,0.17529 -0.10311,0.35057 -0.20622,0.53101 -0.15467,0.61866 -0.36089,1.23216 -0.51555,1.81988 -0.25777,0.75786 -0.46399,1.48993 -0.67021,2.13952 -0.36088,1.29918 -0.67021,2.34573 -0.82487,2.87159 -0.0516,0.15467 -0.0516,0.30417 -0.10311,0.44853 0,0.11857 0,0.23199 -0.0516,0.34026 l 0,0.17528 0,0.21138 0,0.0619 0,0.30933 c 0,0.12373 0.0516,0.24231 0.0516,0.35057 l 0,0.0361 c 0.0516,0.067 0.0516,0.12889 0.0516,0.19075 0.0516,0.0773 0.10311,0.14436 0.10311,0.21138 l 0,0.0155 c 0.0516,0.067 0.10311,0.13404 0.15466,0.19075 l 0,0.0155 c 0.0516,0.0619 0.10311,0.10827 0.15467,0.16498 0,0.0155 0,0.0309 0.0515,0.0464 0,0.0361 0.0516,0.0825 0.10311,0.11342 l 0,0.0309 c 0.0516,0.0155 0.0516,0.0361 0.10311,0.0515 0.0516,0.0516 0.15467,0.098 0.20622,0.14436 0.10311,0.0464 0.20622,0.0928 0.25777,0.12888 0.0516,0.005 0.0516,0.0103 0.0516,0.0155 0.15466,0.0515 0.25777,0.0825 0.36088,0.11342 2.16529,0.57226 10.25937,4.02642 12.94021,4.41307 0.25777,0.0361 0.51555,0.0773 0.82488,0.11342 l 0.15466,0.0155 c 0.30933,0.0309 0.5671,0.0722 0.87643,0.098 0.15466,0.0155 0.36088,0.0206 0.51554,0.0309 l 0.30933,0.0155 c 0.10311,0.005 0.20622,-0.005 0.30933,0 0.0516,0.005 0.15466,0.0155 0.25777,0.0155 0.25778,0.005 0.51555,-0.005 0.77332,-0.0155 0.25778,-0.005 0.46399,-0.0155 0.72177,-0.0309 0.30932,-0.0258 0.61865,-0.0515 0.87643,-0.0979 0.0515,-0.005 0.0515,-0.0103 0.1031,-0.0155 0.15467,-0.0309 0.36089,-0.0567 0.51555,-0.0979 0.30933,-0.067 0.61866,-0.16498 0.92798,-0.27324 0.15467,-0.0516 0.30933,-0.11342 0.464,-0.17529 l 0,0 c 0.25777,-0.0979 0.46399,-0.20106 0.67021,-0.32479 0.0515,-0.0206 0.0515,-0.0412 0.10311,-0.0619 0.1031,-0.0412 0.15466,-0.0876 0.20621,-0.12888 0.10311,-0.067 0.20622,-0.13405 0.30933,-0.21138 1.08265,-0.83518 2.06219,-1.59304 2.99017,-2.28902 0,-0.0103 0,-0.0155 0.0516,-0.0309 0.87643,-0.68567 1.75286,-1.30433 2.52618,-1.86627 0,-0.0206 0.0516,-0.0309 0.0516,-0.0516 0.77331,-0.54648 1.49508,-1.03625 2.11374,-1.47962 0.67021,-0.46399 1.28886,-0.87642 1.85596,-1.24246 l 0.15467,-0.0773 c 0.51554,-0.34026 0.97953,-0.61866 1.44353,-0.88674 0.36088,-0.21653 0.72176,-0.39182 1.03109,-0.5671 0.15466,-0.0825 0.30933,-0.18045 0.46399,-0.25778 0.36088,-0.19075 0.67021,-0.36088 1.03109,-0.51554 0,-0.0206 0.0516,-0.0413 0.10311,-0.0619 0.30933,-0.14951 0.61866,-0.26808 0.92798,-0.38666 0,-0.0258 0.0516,-0.0412 0.10311,-0.067 0.41244,-0.20106 0.77332,-0.39697 1.18576,-0.59288 0,-0.005 0,-0.0103 0.0516,-0.0155 0.41244,-0.21653 0.82488,-0.42791 1.23732,-0.62897 0.0515,-0.0103 0.0515,-0.0258 0.1031,-0.0361 0.41244,-0.19591 0.82488,-0.37635 1.23732,-0.56194 0.0515,-0.005 0.0515,-0.0103 0.0515,-0.0155 0.46399,-0.19075 0.87643,-0.37119 1.34042,-0.54648 -0.10311,-0.19591 -0.20622,-0.45884 -0.46399,-0.84034 -0.10311,-0.19591 -0.25777,-0.51555 -0.41244,-0.90221 -0.15466,-0.30932 -0.36088,-0.71145 -0.51554,-1.10842 -0.0516,-0.0928 -0.10311,-0.22684 -0.15467,-0.3248 -0.46399,-1.0878 -1.03109,-2.41275 -1.64975,-3.75317 0,-0.0464 0,-0.0876 -0.0516,-0.12889 -0.30933,-0.73723 -0.61866,-1.46931 -0.97954,-2.1756 -0.0516,-0.14436 -0.10311,-0.2784 -0.15466,-0.4176 -0.0516,-0.11857 -0.10311,-0.22168 -0.15467,-0.34026 -0.20621,-0.38666 -0.41243,-0.76301 -0.5671,-1.10842 -0.0515,-0.0516 -0.0515,-0.0979 -0.0515,-0.14951 -0.20622,-0.40213 -0.41244,-0.74754 -0.61866,-1.07749 0,-0.0825 -0.0515,-0.14951 -0.10311,-0.22684 -0.36088,0.23715 -0.82487,0.41759 -1.34042,0.59803 -3.35105,1.20122 -7.2692,2.22201 -11.29046,2.89737 -0.10311,-0.005 -0.20622,-0.0825 -0.20622,-0.19075 3.91815,-0.70114 7.68164,-1.7941 10.98114,-3.09328 1.39197,-0.5671 2.31995,-1.29917 0.92798,-1.5157 -4.17592,-0.65475 -8.50651,-1.11358 -12.88866,-1.0775 z" />
          <path
             inkscape:connector-curvature="0"
             id="path4277"
             sodipodi:nodetypes="cssssc"
             style="fill:#ff0000;fill-rule:evenodd"
             d="m 340.30174,129.48703 c -0.25778,-6.78459 -7.1661,-7.25889 -10.98114,-6.62477 -13.61042,2.26325 -27.3755,13.64135 -33.04651,19.30721 -0.61866,0.58256 -1.70131,1.56726 1.03109,1.63943 4.74302,0.12373 13.14643,0.2784 17.16769,-4.73271 10.62025,-13.12065 19.90008,-19.48249 25.82887,-9.58916 z" />
          <path
             inkscape:connector-curvature="0"
             id="path4279"
             style="fill:#ff0000;fill-rule:evenodd"
             d="m 278.38463,133.74544 c -0.0516,1.3198 -0.0516,2.86644 -0.30933,3.8202 -0.25777,0.87127 0.30933,0.72692 0.5671,0.88674 4.12437,2.3612 10.77492,4.62445 15.72417,5.18639 0.0515,-0.50523 0.30932,-0.78363 0.51554,-1.01562 0.20622,-0.26293 0.36088,-0.45884 0.51555,-0.59288 1.18575,-1.21154 2.68084,-2.68084 4.48525,-4.25326 -0.30933,0.14435 -0.67021,0.26809 -1.03109,0.37119 -0.25778,0.0825 -0.5671,0.14951 -0.82488,0.20622 -0.10311,0.0103 -0.15466,0.0258 -0.20621,0.0309 0,0.005 -0.0516,0 -0.0516,0 -0.36088,0.0567 -0.67021,0.10311 -1.03109,0.13404 -0.36088,0.0258 -0.72177,0.0412 -1.1342,0.0464 -0.36089,0.005 -0.72177,0 -1.08265,-0.0155 -0.30933,-0.0155 -0.67021,-0.0361 -1.03109,-0.067 -0.0516,-0.005 -0.15467,-0.0206 -0.20622,-0.0309 -0.61866,-0.0567 -1.1342,-0.12373 -1.64975,-0.19075 -0.15466,-0.0258 -0.36088,-0.067 -0.5671,-0.11343 -0.20622,-0.0464 -0.41244,-0.1031 -0.67021,-0.16497 -0.30933,-0.0876 -0.67021,-0.20106 -1.08265,-0.31964 -0.20622,-0.0773 -0.46399,-0.14435 -0.72176,-0.22684 -0.61866,-0.20622 -1.28887,-0.43306 -1.95908,-0.67536 -1.80441,-0.64444 -3.76349,-1.37136 -5.36168,-1.98486 -0.61865,-0.21653 -1.1342,-0.41759 -1.64975,-0.59288 -0.46399,-0.17528 -0.87643,-0.32479 -1.23731,-0.43821 z m 20.82807,5.65554 c -1.1342,1.01047 -2.16529,1.95908 -2.93861,2.77364 -0.30933,0.29386 -0.72177,0.69599 -0.72177,1.03109 0.10311,-0.27839 0.41244,-0.55679 0.61866,-0.78878 0.82487,-0.88674 1.90752,-1.91783 3.04172,-3.01595 z" />
          <path
             clip-path="url(#clipPath6668)"
             inkscape:connector-curvature="0"
             id="path4299"
             style="fill:#000000;fill-rule:evenodd"
             d="m 303.18241,108.39088 c -0.5671,-0.005 -1.13421,0.005 -1.70131,0.0155 -0.61865,0.0103 -1.28886,0.0309 -1.90752,0.0619 -5.15546,0.24746 -10.25937,1.15998 -15.1055,3.12936 -0.67021,0.2784 -1.18576,0.50008 -1.5982,0.73723 -0.36088,0.23716 -0.67021,0.47946 -0.82487,0.85581 -0.0515,0.10827 -0.10311,0.23715 -0.10311,0.37119 -1.95907,3.40261 -5.15546,14.22393 -5.77412,16.45109 -0.46399,1.87658 0.10311,2.74786 0.77332,3.18607 -0.0516,1.44353 -0.0516,3.03141 -0.25777,3.85113 -0.10311,0.29386 -0.10311,0.54132 -0.0516,0.81972 0.0516,0.28355 0.20622,0.59803 0.41244,0.74239 0.20622,0.14435 0.36088,0.16497 0.46399,0.1959 0.10311,0.0258 0.15467,0.0619 0.10311,0.0309 2.78395,1.75801 6.65055,3.49024 10.41404,4.7688 2.68084,0.88158 5.25857,1.54664 7.47542,1.81988 0.51554,0.18044 1.03109,0.25262 1.75285,0.25777 2.31996,0.0258 5.67101,0.0412 8.97051,-0.6135 3.35105,-0.64959 6.7021,-1.99001 8.91895,-4.84613 1.1342,-1.42807 2.2684,-2.75818 3.35105,-4.01095 7.57853,-2.14983 12.78555,-1.42291 19.95164,-2.67569 0.61866,-0.10826 1.08265,-0.27839 1.49508,-0.53101 0.41244,-0.25777 0.72177,-0.59803 0.92799,-0.91767 0.36088,-0.64444 0.30933,-1.24247 0.30933,-1.62913 -0.0516,-0.61866 -0.15467,-1.17545 -0.25778,-1.67553 -0.25777,-2.50555 -1.44353,-4.33058 -3.04172,-5.44416 -1.7013,-1.21154 -3.76349,-1.65491 -5.67101,-1.72708 -0.30933,-0.0103 -0.61866,-0.005 -0.92798,0 -0.92799,0.0206 -1.80441,0.11857 -2.52618,0.25777 -2.16529,0.39697 -4.27903,1.01563 -6.39277,1.78895 -0.10311,-0.11858 -0.15467,-0.24747 -0.25778,-0.40213 -0.87642,-1.55695 -4.07281,-9.66134 -5.92878,-12.67728 l 0,-0.0516 c 0.0516,-0.2887 -0.0516,-0.59288 -0.25777,-0.80425 -0.36088,-0.36088 -0.77332,-0.4279 -1.18576,-0.48461 -3.76349,-0.46915 -7.63008,-0.82488 -11.54823,-0.85065 z m -1.70131,1.00016 c 4.33059,-0.0361 8.66118,0.42274 12.83711,1.07749 0.30932,0.0515 0.46399,0.15982 0.51554,0.17528 -0.0516,0.0103 -0.0516,0.0412 -0.0516,0.0825 -0.15467,0.19591 -0.72177,0.52586 -1.44353,0.80425 -3.19639,1.2734 -6.90832,2.3612 -10.72336,3.06235 -0.10311,0.0412 -0.15467,0.14951 -0.15467,0.25777 0,0.10826 0.10311,0.1856 0.20622,0.19075 4.02126,-0.67536 7.93941,-1.69615 11.29046,-2.89737 0.51555,-0.18044 0.97954,-0.36088 1.34042,-0.59803 1.75286,3.01594 4.58837,10.28515 5.41324,11.71321 0.25777,0.3815 0.36088,0.64443 0.46399,0.84034 -1.75286,0.70114 -3.50571,1.51571 -5.20702,2.39729 -2.57773,1.07234 -6.135,2.99017 -14.84773,9.77991 -0.41244,0.29902 -0.82487,0.53101 -1.28886,0.72692 l 0,0 c -0.15467,0.0619 -0.30933,0.12373 -0.464,0.17529 -0.30932,0.10826 -0.61865,0.20622 -0.92798,0.27324 -0.15466,0.0412 -0.36088,0.067 -0.51555,0.0979 -0.0516,0.005 -0.0516,0.0103 -0.1031,0.0155 -0.56711,0.0979 -1.18576,0.13404 -1.75286,0.14435 l -0.20622,0 c -0.10311,0 -0.25777,0.005 -0.41244,0 -0.10311,0 -0.20622,-0.0103 -0.25777,-0.0155 -0.10311,-0.005 -0.20622,0.005 -0.30933,0 l -0.30933,-0.0155 c -0.15466,-0.0103 -0.36088,-0.0155 -0.51554,-0.0309 -0.30933,-0.0258 -0.5671,-0.067 -0.87643,-0.098 l -0.15466,-0.0155 c -0.30933,-0.0361 -0.56711,-0.0773 -0.82488,-0.11342 -2.68084,-0.38665 -10.77492,-3.84081 -12.94021,-4.41307 -0.10311,-0.0361 -0.25777,-0.0722 -0.41244,-0.12889 -0.0515,-0.0361 -0.15466,-0.0825 -0.25777,-0.12888 -0.0515,-0.0464 -0.15466,-0.0928 -0.20622,-0.14436 -0.0516,-0.0155 -0.0516,-0.0361 -0.10311,-0.0515 -0.0516,-0.0412 -0.0516,-0.098 -0.10311,-0.14435 -0.0515,-0.0155 -0.0515,-0.0309 -0.0515,-0.0464 -0.0516,-0.0567 -0.10311,-0.11342 -0.15467,-0.18045 -0.0516,-0.0567 -0.1031,-0.12373 -0.15466,-0.19075 l 0,-0.0155 c 0,-0.067 -0.0515,-0.13405 -0.10311,-0.21138 0,-0.0619 0,-0.12373 -0.0516,-0.19075 -0.10311,-0.4743 -0.10311,-1.10327 0.10311,-1.9333 0.51554,-1.99001 3.19638,-11.24922 5.05235,-14.95084 l 0,0 c 0.15466,0.0464 0.30933,0.0825 0.41244,0.11342 2.37151,0.5207 7.11453,0.88158 9.95004,0.91767 0.15466,0 0.25777,-0.10826 0.25777,-0.2423 0,-0.13405 -0.10311,-0.24231 -0.25777,-0.24231 -2.68084,-0.0876 -7.32076,-0.5671 -9.33139,-1.11358 -0.20622,-0.0464 -0.36088,-0.12373 -0.41243,-0.17529 -0.0516,-0.0258 -0.0516,-0.0412 -0.0516,-0.0515 l 0,-0.0464 c 0.0516,-0.0722 0.20622,-0.24746 0.46399,-0.44853 0.30933,-0.20621 0.77332,-0.45368 1.39198,-0.74238 5.15546,-2.35605 10.72336,-3.22732 16.2397,-3.26856 z m 30.21101,13.27016 c 2.78395,-0.0155 6.08345,0.7166 7.68164,3.35105 l 0,0.0825 c 0.0516,0.0825 0.10311,0.17013 0.15467,0.25778 0,0.0309 0.0516,0.067 0.0516,0.098 0.0516,0.0928 0.10311,0.17529 0.10311,0.27324 0.0516,0.0309 0.0516,0.0619 0.0516,0.098 0.0515,0.098 0.1031,0.20107 0.15466,0.30418 l 0,0.0825 c 0.0516,0.11342 0.10311,0.23715 0.10311,0.35057 0,0.0258 0.0516,0.0464 0.0516,0.067 0,0.13919 0.0516,0.26808 0.0516,0.41759 0.0515,0.1392 0.10311,0.2887 0.10311,0.43821 l 0,0.0309 c 0.0516,0.1495 0.0516,0.30932 0.0516,0.46914 0.0516,0.16498 0.0516,0.33511 0.0516,0.51555 -0.20622,-0.30933 -0.36089,-0.59803 -0.5671,-0.87127 l 0,-0.0155 c -0.10311,-0.11858 -0.15467,-0.21137 -0.25778,-0.32479 -0.20622,-0.30418 -0.41243,-0.58773 -0.67021,-0.85066 -0.10311,-0.10311 -0.15466,-0.21137 -0.25777,-0.30932 -0.20622,-0.20622 -0.36088,-0.39697 -0.5671,-0.57742 -0.0516,-0.0103 -0.0516,-0.0103 -0.0516,-0.0206 -0.61865,-0.54648 -1.23731,-0.96922 -1.90752,-1.26824 0,-0.0103 -0.0515,-0.0103 -0.0515,-0.0206 -0.20622,-0.0876 -0.41244,-0.1856 -0.61866,-0.25778 0,0.005 -0.0515,0 -0.0515,0 -3.45416,-1.12389 -7.52698,0.76301 -12.06378,4.69147 -0.0516,0.0516 -0.10311,0.0928 -0.15467,0.14436 -0.20622,0.19591 -0.46399,0.40728 -0.67021,0.6135 -0.20622,0.17528 -0.36088,0.35057 -0.5671,0.53101 -0.10311,0.0876 -0.20622,0.17013 -0.30933,0.25777 -0.41243,0.40213 -0.82487,0.81972 -1.23731,1.25794 -0.25777,0.26808 -0.51554,0.54132 -0.77332,0.81971 -0.41243,0.42791 -0.82487,0.86612 -1.23731,1.3198 -0.36088,0.39697 -0.72176,0.80941 -1.08265,1.227 -0.30932,0.34542 -0.61865,0.68568 -0.92798,1.04656 -0.5671,0.7063 -1.18576,1.43838 -1.80441,2.19107 -3.35105,4.20171 -9.79538,4.76365 -14.58996,4.76881 -0.92798,0 -1.80441,-0.0103 -2.57773,-0.0309 -0.15466,-0.005 -0.25777,-0.0258 -0.41244,-0.0361 0,0.005 -0.0516,0 -0.0516,0 -0.0516,0.005 -0.10311,0 -0.15467,0 -1.90752,-0.19591 -0.97953,-1.07234 -0.41243,-1.60851 1.28886,-1.28886 2.99017,-2.88706 5.05235,-4.59352 0.0516,-0.0515 0.10311,-0.10311 0.15466,-0.15982 6.95988,-5.7638 17.42547,-12.83194 27.8395,-14.56418 0.72177,-0.11857 1.54664,-0.18559 2.37151,-0.1959 z m 0.97954,3.35105 c 0.15467,0 0.30933,-0.005 0.46399,0 0.15467,0.0103 0.25778,0.0206 0.41244,0.0361 0.15466,0.0155 0.30933,0.0361 0.46399,0.0619 0.15467,0.0309 0.25778,0.0619 0.41244,0.0979 0.61865,0.16498 1.18576,0.3712 1.64975,0.59804 0.0516,0.0155 0.10311,0.0309 0.10311,0.0464 0.15466,0.067 0.25777,0.13919 0.41243,0.21137 0.10311,0.0567 0.20622,0.11342 0.30933,0.17529 0.0516,0.0516 0.15467,0.10826 0.20622,0.15982 0.15466,0.0825 0.25777,0.17528 0.36088,0.25777 0.0516,0.0361 0.10311,0.067 0.10311,0.0979 0.15467,0.10311 0.25777,0.21653 0.41244,0.31964 0.10311,0.13404 0.25777,0.25777 0.36088,0.39182 0.0516,0.005 0.0516,0.0206 0.0516,0.0309 0.1031,0.10826 0.20621,0.21653 0.25777,0.31964 0.0515,0.0258 0.0515,0.0567 0.10311,0.0825 0,0.0464 0.0515,0.0825 0.10311,0.12888 0.0516,0.0825 0.10311,0.16498 0.15466,0.24231 0,0.0155 0.0516,0.0309 0.0516,0.0464 0.15466,0.27324 0.30932,0.5671 0.46399,0.87127 0.36088,0.67021 0.87643,2.01579 -1.18576,2.38182 -6.59899,1.16514 -12.06378,0.45884 -18.86899,2.56227 1.34042,-1.47962 2.62928,-2.81488 3.91815,-3.98002 0.82487,-0.77332 1.64975,-1.46415 2.42307,-2.07765 0.36088,-0.27839 0.72176,-0.54132 1.08264,-0.78878 0.0516,-0.0206 0.0516,-0.0412 0.10311,-0.0619 0,-0.0103 0.0516,-0.0103 0.0516,-0.0155 0.36088,-0.23715 0.67021,-0.46399 1.03109,-0.66505 0.0516,-0.0464 0.15466,-0.098 0.20622,-0.14435 0.10311,-0.0464 0.20622,-0.098 0.25777,-0.14436 0.25778,-0.12373 0.46399,-0.23199 0.72177,-0.3351 0.25777,-0.14436 0.5671,-0.26293 0.87643,-0.3712 0.0515,-0.0155 0.0515,-0.0361 0.1031,-0.0516 0.20622,-0.0825 0.464,-0.14435 0.67021,-0.20622 0.10311,-0.0206 0.15467,-0.0464 0.25778,-0.067 0.15466,-0.0361 0.30933,-0.067 0.46399,-0.0979 0.10311,-0.0206 0.25777,-0.0464 0.36088,-0.0619 0.25778,-0.0258 0.46399,-0.0412 0.67021,-0.0516 z m -54.28702,7.73319 c 0.36088,0.11342 0.77332,0.26293 1.23731,0.43821 0.51555,0.17529 1.0311,0.37635 1.64975,0.59288 1.59819,0.6135 3.55727,1.34042 5.36168,1.98486 0.67021,0.2423 1.34042,0.46914 1.95908,0.67536 0.25777,0.0825 0.51554,0.14951 0.72176,0.22684 0.41244,0.11858 0.77332,0.232 1.08265,0.31964 0.25777,0.0619 0.46399,0.11858 0.67021,0.16497 0.20622,0.0464 0.41244,0.0876 0.5671,0.11343 0.51555,0.067 1.03109,0.13404 1.64975,0.19075 0.0515,0.0103 0.15466,0.0258 0.20622,0.0309 0.36088,0.0309 0.72176,0.0516 1.03109,0.067 0.36088,0.0155 0.72176,0.0206 1.08265,0.0155 0.41243,-0.005 0.77332,-0.0206 1.1342,-0.0464 0.36088,-0.0309 0.67021,-0.0773 1.03109,-0.13404 0,0 0.0516,0.005 0.0516,0 0.0515,-0.005 0.1031,-0.0206 0.20621,-0.0309 0.25778,-0.0567 0.5671,-0.12373 0.82488,-0.20622 0.36088,-0.1031 0.72176,-0.22684 1.03109,-0.37119 -1.80441,1.57242 -3.2995,3.04172 -4.48525,4.25326 -0.15467,0.13404 -0.30933,0.32995 -0.51555,0.59288 -0.20622,0.23199 -0.46399,0.51039 -0.51554,1.01562 -4.94925,-0.56194 -11.5998,-2.82519 -15.72417,-5.18639 -0.25777,-0.15982 -0.82487,-0.0155 -0.5671,-0.88674 0.25778,-0.95376 0.25778,-2.5004 0.30933,-3.8202 z" />
          <path
             transform="matrix(0.51554625,0,0,0.51554625,-358.57276,-174.35531)"
             inkscape:connector-curvature="0"
             id="path4396"
             style="fill:#800000;fill-rule:evenodd;filter:url(#filter4423)"
             d="m 1322.8,580.69 c -17.3,5.39 -33.8,17.36 -44,26.19 10.5,-7.77 27.5,-19.11 44,-26.19 z" />
          <path
             transform="matrix(0.51554625,0,0,0.51554625,-358.57276,-174.35531)"
             inkscape:connector-curvature="0"
             id="path4389"
             style="fill:#800000;fill-rule:evenodd;filter:url(#filter4415)"
             d="m 1314.4,596.72 c -3.3,2.68 -6.7,5.6 -10.2,8.75 -10.1,8.98 -22.8,8.69 -30,8.47 -1.4,-0.04 -2,-0.29 -2.2,-0.63 l 0,0.07 c -1.1,1 -3,2.69 1.8,2.81 8.4,0.22 23.3,0.49 30.4,-8.16 3.5,-4.21 6.9,-8.01 10.2,-11.31 z" />
          <path
             transform="matrix(0.51554625,0,0,0.51554625,-358.57276,-174.35531)"
             inkscape:connector-curvature="0"
             id="path4409"
             style="fill:#ffffff;fill-rule:evenodd;filter:url(#filter4427)"
             d="m 1339,576.94 c -1.7,0.01 -3.2,0.15 -4.6,0.37 -4.4,0.75 -8.9,2.05 -13.3,3.69 3.8,-1.31 7.6,-2.36 11.4,-3 1.8,-0.3 4,-0.46 6.2,-0.34 3.4,0.17 6.9,1.01 9.5,2.9 0.1,0.11 0.3,0.26 0.4,0.38 2,1.12 3.9,2.77 5.6,5 -0.7,-2.76 -2.2,-4.69 -4.1,-6.06 -2.6,-1.9 -6.1,-2.74 -9.5,-2.91 -0.5,-0.03 -1.1,-0.04 -1.6,-0.03 z" />
          <path
             transform="matrix(0.51554625,0,0,0.51554625,-358.57276,-174.35531)"
             inkscape:connector-curvature="0"
             id="path4402"
             style="fill:#ffffff;fill-rule:evenodd;filter:url(#filter4431)"
             d="m 1334.6,580.78 c -1,0.3 -1.9,0.66 -2.9,1.1 -8.7,3.97 -18.4,13.48 -28.7,26.24 -2.2,2.73 -5.2,4.63 -8.4,5.97 4,-1.34 7.7,-3.4 10.3,-6.65 10.3,-12.77 20,-22.27 28.7,-26.25 0.4,-0.15 0.7,-0.28 1,-0.41 z" />
          <path
             transform="matrix(0.51554625,0,0,0.51554625,-358.57276,-174.35531)"
             inkscape:connector-curvature="0"
             id="path4505"
             style="fill:#800000;fill-rule:evenodd;filter:url(#filter4507)"
             d="m 1236.1,598.58 c 0.8,2.57 -2.2,6.68 1,8.13 3.7,1.68 7.5,3.21 11.4,4.41 -3.4,-1.77 -6.8,-3.8 -9.8,-6.2 -3,-1 -0.3,-4.87 -2.3,-6.33 l -0.3,-0.01 z" />
          <path
             transform="matrix(0.51554625,0,0,0.51554625,-358.57276,-174.35531)"
             inkscape:connector-curvature="0"
             id="path4534"
             style="fill:#800000;fill-rule:evenodd;filter:url(#filter4528)"
             d="m 1307.9,561.25 c 0.1,0.58 0.4,1.31 0.5,1.84 0.1,0.25 0.2,0.58 0.2,0.82 0.3,1 0.6,2 0.8,2.78 0.3,0.97 0.6,1.79 0.8,2.28 0.3,0.96 0.6,1.64 0.7,2.12 -0.7,0.45 -1.5,0.9 -2.2,1.38 l 0,0.03 c -0.7,0.46 -1.4,0.94 -2.1,1.44 0,0.02 -0.1,0.07 -0.1,0.09 -0.7,0.51 -1.4,1.03 -2.1,1.56 l 0,0.07 c -0.7,0.49 -1.3,0.98 -2,1.5 0,0.05 -0.1,0.1 -0.2,0.15 -0.4,0.3 -0.9,0.6 -1.4,0.97 -0.1,0.05 -0.2,0.1 -0.2,0.16 -0.6,0.39 -1.1,0.82 -1.7,1.31 -0.3,0.19 -0.5,0.45 -0.7,0.66 -0.6,0.44 -1.1,0.86 -1.7,1.4 -0.7,0.68 -1.5,1.4 -2.4,2.25 0,0.07 -0.1,0.12 -0.2,0.19 -0.9,0.92 -1.9,1.96 -3,3.13 -1.1,1.12 -2.2,2.36 -3.4,3.74 -0.1,0.06 -0.1,0.08 -0.2,0.13 -1.2,1.42 -2.6,2.99 -4.1,4.72 l 0,0.06 c -0.8,0.9 -1.7,1.96 -2.5,2.94 1.2,-0.97 2.5,-1.93 3.6,-2.78 0.1,-0.03 0.1,-0.04 0.1,-0.07 1.7,-1.25 3.2,-2.4 4.7,-3.43 0,-0.04 0.1,-0.03 0.1,-0.07 1.4,-1 2.7,-1.9 3.9,-2.71 1.2,-0.85 2.3,-1.62 3.4,-2.29 0,-0.04 0.1,-0.07 0.2,-0.12 1,-0.62 1.8,-1.14 2.7,-1.62 0.6,-0.4 1.2,-0.71 1.8,-1.04 0.3,-0.15 0.6,-0.33 0.9,-0.46 0.6,-0.36 1.2,-0.66 1.8,-0.94 0.1,-0.04 0.2,-0.09 0.3,-0.13 0.5,-0.27 1.1,-0.5 1.6,-0.72 l 0.3,-0.12 c 0.7,-0.37 1.4,-0.7 2.1,-1.06 l 0,-0.03 c 0.8,-0.39 1.6,-0.79 2.4,-1.16 0.1,-0.02 0.1,-0.05 0.1,-0.06 0.8,-0.36 1.6,-0.7 2.4,-1.04 l 0,-0.03 c 0.8,-0.34 1.6,-0.68 2.4,-1 -0.1,-0.35 -0.3,-0.83 -0.7,-1.53 -0.3,-0.35 -0.6,-0.95 -0.9,-1.65 -0.3,-0.57 -0.6,-1.3 -0.9,-2.03 -0.1,-0.17 -0.2,-0.39 -0.2,-0.57 -0.9,-1.98 -2,-4.43 -3,-6.87 -0.1,-0.08 -0.1,-0.14 -0.1,-0.22 -0.6,-1.34 -1.2,-2.69 -1.8,-3.97 z" />
          <path
             transform="matrix(0.51554625,0,0,0.51554625,-358.57276,-174.35531)"
             inkscape:connector-curvature="0"
             id="path4523"
             style="fill:#ffffff;fill-rule:evenodd;filter:url(#filter4528)"
             d="m 1244.9,562.09 c 0,0.12 -0.1,0.22 -0.1,0.35 -0.1,0.17 -0.2,0.35 -0.3,0.53 -0.1,0.3 -0.2,0.59 -0.4,0.91 -0.3,0.72 -0.5,1.5 -0.9,2.31 -0.4,1.32 -1,2.7 -1.4,4.15 -0.5,1.45 -1,2.97 -1.5,4.44 -0.1,0.33 -0.2,0.65 -0.3,0.97 -0.4,1.13 -0.7,2.24 -1.1,3.31 -0.4,1.39 -0.8,2.75 -1.1,3.94 -0.7,2.37 -1.3,4.26 -1.6,5.22 0,0.29 -0.1,0.58 -0.1,0.84 -0.1,0.21 -0.1,0.4 -0.1,0.6 l 0,0.34 c 0,0.13 -0.1,0.25 -0.1,0.38 l 0,0.12 c 0,0.19 0.1,0.39 0.1,0.56 0,0.23 0,0.43 0.1,0.63 l 0,0.06 c 0,0.12 0,0.26 0.1,0.37 0,0.15 0.1,0.26 0.2,0.38 l 0,0.03 c 0,0.13 0.1,0.24 0.2,0.35 l 0,0.03 c 0.1,0.11 0.2,0.18 0.3,0.28 0,0.03 0,0.06 0.1,0.09 0,0.07 0.1,0.16 0.2,0.22 l 0,0.06 c 0.1,0.03 0.1,0.07 0.1,0.1 0.2,0.1 0.3,0.17 0.5,0.25 0.1,0.09 0.3,0.18 0.4,0.25 0.1,0.01 0.1,-0.01 0.1,0 0.2,0.09 0.5,0.16 0.7,0.22 2.4,0.64 8.9,3.27 14.8,5.37 -4.6,-2.61 -9.2,-5.42 -11,-6.19 -0.2,-0.07 -0.4,-0.15 -0.6,-0.28 l 0,-0.06 c -0.2,-0.09 -0.3,-0.19 -0.5,-0.31 -0.1,-0.11 -0.2,-0.24 -0.4,-0.38 0,-0.04 0,-0.08 -0.1,-0.12 l 0,-0.07 c -0.1,-0.08 -0.1,-0.19 -0.2,-0.28 0,-0.04 0,-0.08 -0.1,-0.12 0,-0.14 -0.1,-0.25 -0.2,-0.41 l 0,-0.03 c -0.1,-0.15 -0.2,-0.33 -0.2,-0.5 l 0,-0.03 c -0.1,-0.17 -0.1,-0.34 -0.2,-0.53 0,-0.16 -0.1,-0.33 -0.1,-0.5 l 0,-0.06 c 0,-0.28 -0.1,-0.6 -0.1,-0.91 l 0,-0.78 0,-0.16 0,-0.53 0,-0.44 c 0,-0.27 0.1,-0.55 0.1,-0.84 0.1,-0.36 0.1,-0.76 0.2,-1.16 0.2,-1.32 0.7,-3.94 1.3,-7.22 0.3,-1.64 0.7,-3.49 1.1,-5.4 0.2,-1.48 0.6,-3.04 0.9,-4.6 0.1,-0.44 0.2,-0.89 0.3,-1.34 l 0.9,-4.41 z" />
          <path
             transform="matrix(0.51554625,0,0,0.51554625,-358.57276,-174.35531)"
             inkscape:connector-curvature="0"
             id="path4554"
             style="fill:#ffffff;fill-rule:evenodd;filter:url(#filter4560)"
             d="m 1280.3,551.16 c -10.3,0.08 -20.6,1.69 -30.3,6.03 10.2,-2.55 20.8,-3.56 31.5,-3.63 6.5,-0.04 13,0.28 19.4,0.82 0.6,-0.24 1.3,-0.48 1.9,-0.72 0.4,-0.17 0.8,-0.33 1.1,-0.5 -7.7,-1.22 -15.6,-2.07 -23.6,-2 z" />
          <path
             transform="matrix(0.51554625,0,0,0.51554625,-358.57276,-174.35531)"
             inkscape:connector-curvature="0"
             id="path4545"
             style="fill:#ffffff;fill-rule:evenodd;filter:url(#filter4568)"
             d="m 1306.9,556.92 c -7.1,2.21 -15.2,4.05 -23.5,5.28 0.1,0.21 0.3,0.37 0.6,0.38 8.2,-1.15 16.2,-2.8 23.3,-4.75 -0.1,-0.31 -0.3,-0.62 -0.4,-0.91 z" />
          <path
             transform="matrix(0.51554625,0,0,0.51554625,-358.57276,-174.35531)"
             inkscape:connector-curvature="0"
             id="path4543"
             style="fill:#ffffff;fill-rule:evenodd;filter:url(#filter4564)"
             d="m 1245,562.14 0,0.09 -0.3,0.72 c 5.6,0.55 12.4,0.92 17,0.97 0.3,0 0.6,-0.21 0.6,-0.47 l -0.2,0 c -4.6,-0.1 -11.6,-0.61 -17.1,-1.31 z" />
          <path
             transform="matrix(0.51554625,0,0,0.51554625,-358.57276,-174.35531)"
             inkscape:connector-curvature="0"
             id="path4443"
             style="fill:#800000;fill-rule:evenodd;filter:url(#filter4452)"
             d="m 1350.8,587.09 c -0.4,1.66 -1.4,3.5 -3.9,4.5 -6.1,2.41 -11.3,3.53 -16.7,4.91 6.8,-0.72 13.3,-0.72 20.6,-2 3.7,-0.65 2.8,-3.06 2.2,-4.25 -0.3,-0.54 -0.6,-1.05 -0.9,-1.53 l 0,-0.1 c -0.4,-0.46 -0.8,-0.97 -1.3,-1.53 z" />
        </g>
      </g>
      <path
         sodipodi:nodetypes="cc"
         inkscape:connector-curvature="0"
         id="path9524"
         d="m 293.70572,222.64143 c 9.02694,1.47369 17.23347,1.67575 48.21428,1.78571"
         style="fill:none;fill-rule:evenodd;stroke:url(#linearGradient9532);stroke-width:7;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
      <path
         clip-path="url(#clipPath14148)"
         style="fill:none;fill-rule:evenodd;stroke:url(#linearGradient9522);stroke-width:7;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
         d="m 329.24143,201.92714 c 0,0 8.92857,3.21429 10,8.21429 0.48328,2.25531 3.18278,24.12965 6.00088,47.46539 3.42959,28.39938 7.03483,58.96318 7.03483,58.96318"
         id="path9520"
         inkscape:connector-curvature="0"
         sodipodi:nodetypes="cssc" />
      <path
         sodipodi:nodetypes="cssc"
         inkscape:connector-curvature="0"
         id="path8052"
         d="m 281.92,199.42714 c 0,0 8.92857,3.21429 10,8.21429 0.48328,2.25531 3.18278,24.12965 6.00088,47.46539 3.42959,28.39938 7.03483,58.96318 7.03483,58.96318"
         style="fill:none;fill-rule:evenodd;stroke:url(#linearGradient9518);stroke-width:7;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" />
      <g
         transform="matrix(0.49167905,-0.09573143,-0.09424904,-0.35301454,306.10882,337.47151)"
         id="g11286">
        <path
           inkscape:connector-curvature="0"
           id="path2894"
           style="fill:#d3bc5f;fill-rule:evenodd"
           d="m 110.29,1.9932 76.29,32.459 0,112.91 -76.29,-56.297 0,-89.07 z" />
        <path
           inkscape:connector-curvature="0"
           id="path2896"
           style="fill:url(#linearGradient3504);fill-rule:evenodd"
           d="m 1.5117,18.829 55.887,43.794 129.18,-28.171 -76.29,-32.459 -108.78,16.836 z" />
        <path
           inkscape:connector-curvature="0"
           id="path2898"
           style="fill:url(#linearGradient3501);fill-rule:evenodd"
           d="m 57.399,62.623 0,133.77 129.18,-49.03 0,-112.91 -129.18,28.173 z" />
        <path
           inkscape:connector-curvature="0"
           id="path2900"
           style="fill:url(#linearGradient3498);fill-rule:evenodd"
           d="m 0.6238,17.941 55.887,43.794 0,133.78 -55.887,-76.02 -2e-4,-101.56 z" />
        <path
           inkscape:connector-curvature="0"
           id="path2575"
           sodipodi:nodetypes="cc"
           style="fill:none;stroke:#784421;stroke-width:2.51110005px"
           d="M 60.085,10.357 128.34,46.833" />
        <path
           inkscape:connector-curvature="0"
           id="path3353"
           style="fill:none;stroke:#c7a768;stroke-width:2.51110005px"
           d="m 1.5695,18.833 55.872,43.631 129.64,-27.936" />
        <path
           inkscape:connector-curvature="0"
           id="path2577"
           sodipodi:nodetypes="cccccccccccc"
           style="opacity:0.42168998;fill:#34dbdb;fill-opacity:0.36486003;fill-rule:evenodd;stroke:#ffffff;stroke-width:0.50221997"
           d="m 140.9,44.454 0.19,10.79 -3.84,-6.513 -3.06,7.534 -2.91,-6.278 -3.68,6.513 -1.73,-3.767 -3.92,6.592 -1.57,-5.022 -4.63,7.533 -0.36,-11.849 25.51,-5.533 z" />
        <path
           inkscape:connector-curvature="0"
           id="path3355"
           style="fill:none;stroke:#c7a768;stroke-width:2.51110005px"
           d="m 57.128,62.15 0,134.34" />
        <path
           inkscape:connector-curvature="0"
           id="path3349"
           sodipodi:nodetypes="ccccc"
           style="opacity:0.5;fill:#a9c7c9;fill-rule:evenodd;stroke:#ffffff;stroke-width:0.50221997"
           d="M 115.35,49.908 49.124,11.457 70.154,8.318 141.09,44.415 115.35,49.908 Z" />
        <path
           inkscape:connector-curvature="0"
           id="path3351"
           sodipodi:nodetypes="ccccccc"
           style="fill:none;stroke:#6c5434;stroke-width:2.51110005px"
           d="m 1.2556,18.833 0.3139,101.39 54.93,75.65 130.26,-48.66 -0.31,-113.31 -76.59,-32.644 -108.6,17.577 z" />
      </g>
      <path
         sodipodi:nodetypes="cccccc"
         inkscape:connector-curvature="0"
         id="path11298"
         d="m 304.58122,331.90251 14.64721,-12.62691 58.58885,-2.02031 -17.67767,10.10153 0,0 z"
         style="fill:#7c7c7c;fill-opacity:1;fill-rule:evenodd;stroke:none;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1" />
      <g
         transform="matrix(-0.29830682,0,0,0.29830682,562.3815,285.26804)"
         id="g14126">
        <path
           style="fill:#000000;fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:1px;stroke-linecap:butt;stroke-linejoin:miter;stroke-opacity:1"
           d="m 857.3872,182.905 c 0,0 12.6269,6.06092 23.2335,5.05077 10.60661,-1.01016 19.69798,-3.53554 21.21321,-15.15229 1.51523,-11.61676 6.06091,-33.33504 3.53553,-44.44671 -2.52538,-11.11168 -1.51523,-37.375647 -16.66752,-36.870567 -15.15228,0.50507 -27.77919,6.06091 -34.34518,23.738577 -6.56599,17.67767 -13.13199,17.67767 -10.10153,34.85027 3.03046,17.17259 13.13199,32.82995 13.13199,32.82995 z"
           id="path14122"
           inkscape:connector-curvature="0" />
        <path
           style="fill:#807b88"
           inkscape:connector-curvature="0"
           d="m 878.28107,119.50619 c 3.388,-11.298 9.036,-10.166 12.99,0 3.39,19.77 4.521,50.272 -6.213,53.66 0,0 -9.602,-5.084 -9.036,-14.686 3.389,5.647 7.906,15.25 10.167,2.823 l -10.167,-6.778 4.519,-5.647 7.908,0.564 c 0,0 2.257,-9.602 1.128,-17.51 -1.128,-7.908 -4.519,2.824 -4.519,2.824 l 0,9.602 -3.39,-1.129 c 0,0 3.842,-1.996 -5.646,-6.214 -5.084,-2.259 6.212,-2.259 6.212,-2.259 0,0 0.565,-2.26 -6.212,-2.824 l 1.693,-3.955 10.733,-6.777 c 0,0.03 -1.69,-12.4 -10.16,-1.67 z"
           i:knockout="Off"
           id="path14124" />
      </g>
    </g>
  </g>
</svg>

                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </nav>
                        @endif
                    </header>

                    <main class="mt-6">
                        <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">
                            <a
                                href="{{ route('login') }}"
                                id="docs-card"
                                class="flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] md:row-span-3 lg:p-10 lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-light.svg"
                                        alt="Laravel documentation screenshot"
                                        class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                                        onerror="
                                            document.getElementById('screenshot-container').classList.add('!hidden');
                                            document.getElementById('docs-card').classList.add('!row-span-1');
                                            document.getElementById('docs-card-content').classList.add('!flex-row');
                                            document.getElementById('background').classList.add('!hidden');
                                        "
                                    />
                                    <img
                                        src="https://laravel.com/assets/img/welcome/docs-dark.svg"
                                        alt="Laravel documentation screenshot"
                                        class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block"
                                    />
                                    <div
                                        class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                                    ></div>
                                </div>

                                <div class="relative flex items-center gap-6 lg:items-end">
                                    <div id="docs-card-content" class="flex items-start gap-6 lg:flex-col">
                                        <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                            <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><path fill="#FF2D20" d="M23 4a1 1 0 0 0-1.447-.894L12.224 7.77a.5.5 0 0 1-.448 0L2.447 3.106A1 1 0 0 0 1 4v13.382a1.99 1.99 0 0 0 1.105 1.79l9.448 4.728c.14.065.293.1.447.1.154-.005.306-.04.447-.105l9.453-4.724a1.99 1.99 0 0 0 1.1-1.789V4ZM3 6.023a.25.25 0 0 1 .362-.223l7.5 3.75a.251.251 0 0 1 .138.223v11.2a.25.25 0 0 1-.362.224l-7.5-3.75a.25.25 0 0 1-.138-.22V6.023Zm18 11.2a.25.25 0 0 1-.138.224l-7.5 3.75a.249.249 0 0 1-.329-.099.249.249 0 0 1-.033-.12V9.772a.251.251 0 0 1 .138-.224l7.5-3.75a.25.25 0 0 1 .362.224v11.2Z"/><path fill="#FF2D20" d="m3.55 1.893 8 4.048a1.008 1.008 0 0 0 .9 0l8-4.048a1 1 0 0 0-.9-1.785l-7.322 3.706a.506.506 0 0 1-.452 0L4.454.108a1 1 0 0 0-.9 1.785H3.55Z"/></svg>
                                        </div>

                                        <div class="pt-3 sm:pt-5 lg:pt-0">
                                            <h2 class="text-xl font-semibold text-black dark:text-white">Your package, your price</h2>

                                            <p class="mt-4 text-sm/relaxed">
                                                Parcel247 is a courier service that delivers your parcel 24/7. We offer a wide range of services to meet your needs. Our prices are competitive and we offer a range of delivery options to suit your needs. Whether you need a parcel delivered locally or internationally, we can help. Our team of experienced couriers will ensure your parcel is delivered safely and on time. Contact us today to find out more about our services.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- <svg class="size-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg> -->
                                </div>
                            </a>

                            <a
                                href="{{ route('login') }}"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Send Parcel 24/7</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Get your parcel delivered anytime, anywhere. Parcel247 is a courier service that delivers your parcel 24/7. We offer a wide range of services to meet your needs.
                                    </p>
                                </div>

                                <!-- <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg> -->
                            </a>

                            <a
                                href="{{ route('login') }}"
                                class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]"
                            >
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g fill="#FF2D20"><path d="M8.75 4.5H5.5c-.69 0-1.25.56-1.25 1.25v4.75c0 .69.56 1.25 1.25 1.25h3.25c.69 0 1.25-.56 1.25-1.25V5.75c0-.69-.56-1.25-1.25-1.25Z"/><path d="M24 10a3 3 0 0 0-3-3h-2V2.5a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2V20a3.5 3.5 0 0 0 3.5 3.5h17A3.5 3.5 0 0 0 24 20V10ZM3.5 21.5A1.5 1.5 0 0 1 2 20V3a.5.5 0 0 1 .5-.5h14a.5.5 0 0 1 .5.5v17c0 .295.037.588.11.874a.5.5 0 0 1-.484.625L3.5 21.5ZM22 20a1.5 1.5 0 1 1-3 0V9.5a.5.5 0 0 1 .5-.5H21a1 1 0 0 1 1 1v10Z"/><path d="M12.751 6.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 7.3v-.5a.75.75 0 0 1 .751-.753ZM12.751 10.047h2a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-2A.75.75 0 0 1 12 11.3v-.5a.75.75 0 0 1 .751-.753ZM4.751 14.047h10a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-10A.75.75 0 0 1 4 15.3v-.5a.75.75 0 0 1 .751-.753ZM4.75 18.047h7.5a.75.75 0 0 1 .75.75v.5a.75.75 0 0 1-.75.75h-7.5A.75.75 0 0 1 4 19.3v-.5a.75.75 0 0 1 .75-.753Z"/></g></svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Door step delivery</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Get your parcel delivered to your doorstep. Parcel247 offers door step delivery services to meet your needs. Available at your disposal 24/7.
                                    </p>
                                </div>

                                <!-- <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg> -->
                            </a>

                            <a
                                href="{{ route('login') }}"
                                
                            >

                            <div class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <g fill="#FF2D20">
                                            <path
                                                d="M16.597 12.635a.247.247 0 0 0-.08-.237 2.234 2.234 0 0 1-.769-1.68c.001-.195.03-.39.084-.578a.25.25 0 0 0-.09-.267 8.8 8.8 0 0 0-4.826-1.66.25.25 0 0 0-.268.181 2.5 2.5 0 0 1-2.4 1.824.045.045 0 0 0-.045.037 12.255 12.255 0 0 0-.093 3.86.251.251 0 0 0 .208.214c2.22.366 4.367 1.08 6.362 2.118a.252.252 0 0 0 .32-.079 10.09 10.09 0 0 0 1.597-3.733ZM13.616 17.968a.25.25 0 0 0-.063-.407A19.697 19.697 0 0 0 8.91 15.98a.25.25 0 0 0-.287.325c.151.455.334.898.548 1.328.437.827.981 1.594 1.619 2.28a.249.249 0 0 0 .32.044 29.13 29.13 0 0 0 2.506-1.99ZM6.303 14.105a.25.25 0 0 0 .265-.274 13.048 13.048 0 0 1 .205-4.045.062.062 0 0 0-.022-.07 2.5 2.5 0 0 1-.777-.982.25.25 0 0 0-.271-.149 11 11 0 0 0-5.6 2.815.255.255 0 0 0-.075.163c-.008.135-.02.27-.02.406.002.8.084 1.598.246 2.381a.25.25 0 0 0 .303.193 19.924 19.924 0 0 1 5.746-.438ZM9.228 20.914a.25.25 0 0 0 .1-.393 11.53 11.53 0 0 1-1.5-2.22 12.238 12.238 0 0 1-.91-2.465.248.248 0 0 0-.22-.187 18.876 18.876 0 0 0-5.69.33.249.249 0 0 0-.179.336c.838 2.142 2.272 4 4.132 5.353a.254.254 0 0 0 .15.048c1.41-.01 2.807-.282 4.117-.802ZM18.93 12.957l-.005-.008a.25.25 0 0 0-.268-.082 2.21 2.21 0 0 1-.41.081.25.25 0 0 0-.217.2c-.582 2.66-2.127 5.35-5.75 7.843a.248.248 0 0 0-.09.299.25.25 0 0 0 .065.091 28.703 28.703 0 0 0 2.662 2.12.246.246 0 0 0 .209.037c2.579-.701 4.85-2.242 6.456-4.378a.25.25 0 0 0 .048-.189 13.51 13.51 0 0 0-2.7-6.014ZM5.702 7.058a.254.254 0 0 0 .2-.165A2.488 2.488 0 0 1 7.98 5.245a.093.093 0 0 0 .078-.062 19.734 19.734 0 0 1 3.055-4.74.25.25 0 0 0-.21-.41 12.009 12.009 0 0 0-10.4 8.558.25.25 0 0 0 .373.281 12.912 12.912 0 0 1 4.826-1.814ZM10.773 22.052a.25.25 0 0 0-.28-.046c-.758.356-1.55.635-2.365.833a.25.25 0 0 0-.022.48c1.252.43 2.568.65 3.893.65.1 0 .2 0 .3-.008a.25.25 0 0 0 .147-.444c-.526-.424-1.1-.917-1.673-1.465ZM18.744 8.436a.249.249 0 0 0 .15.228 2.246 2.246 0 0 1 1.352 2.054c0 .337-.08.67-.23.972a.25.25 0 0 0 .042.28l.007.009a15.016 15.016 0 0 1 2.52 4.6.25.25 0 0 0 .37.132.25.25 0 0 0 .096-.114c.623-1.464.944-3.039.945-4.63a12.005 12.005 0 0 0-5.78-10.258.25.25 0 0 0-.373.274c.547 2.109.85 4.274.901 6.453ZM9.61 5.38a.25.25 0 0 0 .08.31c.34.24.616.561.8.935a.25.25 0 0 0 .3.127.631.631 0 0 1 .206-.034c2.054.078 4.036.772 5.69 1.991a.251.251 0 0 0 .267.024c.046-.024.093-.047.141-.067a.25.25 0 0 0 .151-.23A29.98 29.98 0 0 0 15.957.764a.25.25 0 0 0-.16-.164 11.924 11.924 0 0 0-2.21-.518.252.252 0 0 0-.215.076A22.456 22.456 0 0 0 9.61 5.38Z"
                                            />
                                        </g>
                                    </svg>
                                </div>

                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-black dark:text-white">Track your parcel</h2>

                                    <p class="mt-4 text-sm/relaxed">
                                        Track your parcel with Parcel247. We offer a tracking service that allows you to track your parcel in real-time. Get updates on the status of your parcel anytime, anywhere.
                                    </p>
                                </div>
                            </div>
                        </a>
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        Powered by Noel and team
                    </footer>
                </div>
            </div>
        </div>
    </body>
</html>
