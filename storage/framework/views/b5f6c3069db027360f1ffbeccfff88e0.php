<ul class="link-follow d-flex align-items-center justify-content-start gap-2">

    <?php if($shop->settings->first()->whatsapp===1): ?>
        <li>
            <a style="background: none" title="whatsapp" target="_blank" rel="noopener noreferrer"
               href=" https://wa.me/995<?php echo e($shop->user->mobile); ?>">
                <svg viewBox="0 0 256 259" width="38" height="38" xmlns="http://www.w3.org/2000/svg"
                     preserveAspectRatio="xMidYMid">
                    <path d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z"
                          fill="#00E676"/>
                    <path  d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-55.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.557 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z"
                          fill="#FFF"/>
                </svg>
            </a>
        </li>
    <?php endif; ?>


    <?php if($shop->facebook!==null): ?>
        <li>
            <a style="background: none" title="facebook" target="_blank" rel="noopener noreferrer"
               href="<?php echo e($shop->facebook); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" fill="url(#a)" height="36" width="36">
                    <defs>
                        <linearGradient x1="50%" x2="50%" y1="97.078%" y2="0%" id="a">
                            <stop offset="0%" stop-color="#0062E0"></stop>
                            <stop offset="100%" stop-color="#19AFFF"></stop>
                        </linearGradient>
                    </defs>
                    <path d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"></path>
                    <path fill="#FFF"
                          d="m25 23 .8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"></path>
                </svg>

            </a>
        </li>
    <?php endif; ?>

    <?php if($shop->instagram!==null): ?>
        <li>

            <a style="background: none" title="instagram" target="_blank" rel="noopener noreferrer"
               href="<?php echo e($shop->instagram); ?>">
                <svg enable-background="new 0 0 1024 1024" height="36" id="Instagram_2_" version="1.1"
                     viewBox="0 0 1024 1024" width="36" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Background">
                        <linearGradient gradientTransform="matrix(0.9397 0.3421 0.3421 -0.9397 276.2042 765.8284)"
                                        gradientUnits="userSpaceOnUse" id="bg_1_" x1="463.9526" x2="-194.4829"
                                        y1="-73.1143" y2="711.4479">
                            <stop offset="0" style="stop-color:#20254C"></stop>
                            <stop offset="0.0571" style="stop-color:#29254D"></stop>
                            <stop offset="0.1502" style="stop-color:#41234F"></stop>
                            <stop offset="0.2679" style="stop-color:#692152"></stop>
                            <stop offset="0.4039" style="stop-color:#A01F57"></stop>
                            <stop offset="0.5333" style="stop-color:#DA1C5C"></stop>
                            <stop offset="0.5924" style="stop-color:#DC255A"></stop>
                            <stop offset="0.6889" style="stop-color:#E13D56"></stop>
                            <stop offset="0.8106" style="stop-color:#EA654E"></stop>
                            <stop offset="0.9515" style="stop-color:#F69C44"></stop>
                            <stop offset="1" style="stop-color:#FBB040"></stop>
                        </linearGradient>
                        <circle cx="512.001" cy="512" fill="url(#bg_1_)" id="bg" r="512"></circle>
                    </g>
                    <g id="Instagram_3_">
                        <circle cx="658.765" cy="364.563" fill="#FFFFFF" r="33.136"></circle>
                        <circle cx="512.001" cy="512" fill="none" r="121.412" stroke="#FFFFFF" stroke-miterlimit="10"
                                stroke-width="45"></circle>
                        <path d="M255.358,612.506c0,91.127,73.874,165,165,165   h183.283c91.127,0,165-73.873,165-165V411.495c0-91.127-73.873-165-165-165H420.358c-91.127,0-165,73.873-165,165V612.506z"
                              fill="none" stroke="#FFFFFF" stroke-miterlimit="10" stroke-width="45"></path>
                    </g></svg>
            </a>
        </li>
    <?php endif; ?>
    <?php if($shop->messenger!==null): ?>

        <li>
            <a style="background: none" title="Messenger" target="_blank" rel="noopener noreferrer"
               href="https://m.me/<?php echo e($shop->messenger); ?>">
                <svg viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg" width="36" height="36"
                     preserveAspectRatio="xMidYMid">
                    <defs>
                        <radialGradient id="a" cx="19.247%" cy="99.465%" r="108.96%" fx="19.247%" fy="99.465%">
                            <stop offset="0%" stop-color="#09F"></stop>
                            <stop offset="60.975%" stop-color="#A033FF"></stop>
                            <stop offset="93.482%" stop-color="#FF5280"></stop>
                            <stop offset="100%" stop-color="#FF7061"></stop>
                        </radialGradient>
                    </defs>
                    <path fill="url(#a)"
                          d="M128 0C55.894 0 0 52.818 0 124.16c0 37.317 15.293 69.562 40.2 91.835 2.09 1.871 3.352 4.493 3.438 7.298l.697 22.77c.223 7.262 7.724 11.988 14.37 9.054L84.111 243.9a10.218 10.218 0 0 1 6.837-.501c11.675 3.21 24.1 4.92 37.052 4.92 72.106 0 128-52.818 128-124.16S200.106 0 128 0Z"></path>
                    <path fill="#FFF"
                          d="m51.137 160.47 37.6-59.653c5.98-9.49 18.788-11.853 27.762-5.123l29.905 22.43a7.68 7.68 0 0 0 9.252-.027l40.388-30.652c5.39-4.091 12.428 2.36 8.82 8.085l-37.6 59.654c-5.981 9.489-18.79 11.852-27.763 5.122l-29.906-22.43a7.68 7.68 0 0 0-9.25.027l-40.39 30.652c-5.39 4.09-12.427-2.36-8.818-8.085Z"></path>
                </svg>
            </a>
        </li>
    <?php endif; ?>
    <?php if($shop->youtube!==null): ?>

        <li style="margin-left: 5px">
            <a style="background: none;" title="Youtube" target="_blank" rel="noopener noreferrer"
               href="https://www.youtube.com/<?php echo e($shop->youtube); ?>">
                <svg viewBox="0 0 256 180" width="36" height="36" xmlns="http://www.w3.org/2000/svg"
                     preserveAspectRatio="xMidYMid">
                    <path d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134Z"
                          fill="red"></path>
                    <path fill="#FFF" d="m102.421 128.06 66.328-38.418-66.328-38.418z"></path>
                </svg>
            </a>
        </li>
    <?php endif; ?>

</ul><?php /**PATH E:\HERD\catalogue\resources\views/components/socials.blade.php ENDPATH**/ ?>