<?php include 'content/pages/_partials/header.php'; ?>

    <div class="max-w-screen-lg max-h-dvh mx-auto">
        <div class="w-full sm:max-w-screen-lg flex items-center text-center lg:text-left">
            <div class="w-full mb-0 lg:w-3/5">
                <div class="whitespace-pre-line mb-2 px-4 sm:px-0 font-title text-4xl sm:text-5xl tracking-tight text-secondary dark:text-content font-bold">
                    I'm a Software Developer
                </div>
                <div class="sm:whitespace-pre-line mb-10 px-10 sm:px-0 font-title text-secondary dark:text-content text-xl sm:text-2xl md:text-3xl leading-normal tracking-tight">with <span class="font-bold text-accent"><?php echo $experienceInYears; ?> years of full-stack experience</span>
                    based in Gloucestershire, UK
                </div>
                <div class="lg:hidden">
                    <img class="w-1/2 md:w-1/3 mx-auto mb-10 -mt-3 drop-shadow-lg"
                         title="Definitely not Kevin Smith"
                         alt="Not Kevin Smith"
                         loading="eager"
                         src="<?php echo asset('images/me.png'); ?>"/>
                </div>
                <div class="max-w-screen-sm mx-auto lg:w-full pl-8 pr-8 lg:pl-0 lg:pr-10">
                    <p class="text-lg/7">I also run <a href="https://tripleweb.co.uk" class="text-accent dark:text-content/85 underline hover:text-primary dark:hover:text-content">a part-time software development company</a> and bootstrapping projects
                        and maintaining an open-source static site generator <a
                                href="https://github.com/terdelyi/phanstatic"
                                class="text-accent dark:text-content/85 underline hover:text-primary dark:hover:text-content">Phanstatic</a>.
                    </p>
                    <div class="mt-8">
                        <ul class="inline-flex items-center gap-4">
                            <li>
                                <a href="https://www.linkedin.com/in/terdelyi/" target="_blank"
                                   rel="noopener noreferrer" class="hover:text-accent" aria-label="LinkedIn">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                         class="hover:fill-accent fill-body dark:fill-content/80 dark:hover:fill-content inline-block h-8 w-8">
                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/terdelyi/" target="_blank" rel="noopener noreferrer"
                                   class="hover:text-accent" aria-label="GitHub">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 480 512"
                                         class="hover:fill-accent fill-body dark:fill-content/80 dark:hover:fill-content inline-block h-8 w-8">
                                        <!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M186.1 328.7c0 20.9-10.9 55.1-36.7 55.1s-36.7-34.2-36.7-55.1 10.9-55.1 36.7-55.1 36.7 34.2 36.7 55.1zM480 278.2c0 31.9-3.2 65.7-17.5 95-37.9 76.6-142.1 74.8-216.7 74.8-75.8 0-186.2 2.7-225.6-74.8-14.6-29-20.2-63.1-20.2-95 0-41.9 13.9-81.5 41.5-113.6-5.2-15.8-7.7-32.4-7.7-48.8 0-21.5 4.9-32.3 14.6-51.8 45.3 0 74.3 9 108.8 36 29-6.9 58.8-10 88.7-10 27 0 54.2 2.9 80.4 9.2 34-26.7 63-35.2 107.8-35.2 9.8 19.5 14.6 30.3 14.6 51.8 0 16.4-2.6 32.7-7.7 48.2 27.5 32.4 39 72.3 39 114.2zm-64.3 50.5c0-43.9-26.7-82.6-73.5-82.6-18.9 0-37 3.4-56 6-14.9 2.3-29.8 3.2-45.1 3.2-15.2 0-30.1-.9-45.1-3.2-18.7-2.6-37-6-56-6-46.8 0-73.5 38.7-73.5 82.6 0 87.8 80.4 101.3 150.4 101.3h48.2c70.3 0 150.6-13.4 150.6-101.3zm-82.6-55.1c-25.8 0-36.7 34.2-36.7 55.1s10.9 55.1 36.7 55.1 36.7-34.2 36.7-55.1-10.9-55.1-36.7-55.1z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://bsky.app/profile/terdelyi.co.uk/" target="_blank"
                                   rel="noopener noreferrer" class="hover:text-accent" aria-label="X">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="hover:fill-accent fill-body dark:fill-content/80 dark:hover:fill-content inline-block h-7 w-7">
                                        <!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M111.8 62.2C170.2 105.9 233 194.7 256 242.4c23-47.6 85.8-136.4 144.2-180.2c42.1-31.6 110.3-56 110.3 21.8c0 15.5-8.9 130.5-14.1 149.2C478.2 298 412 314.6 353.1 304.5c102.9 17.5 129.1 75.5 72.5 133.5c-107.4 110.2-154.3-27.6-166.3-62.9l0 0c-1.7-4.9-2.6-7.8-3.3-7.8s-1.6 3-3.3 7.8l0 0c-12 35.3-59 173.1-166.3 62.9c-56.5-58-30.4-116 72.5-133.5C100 314.6 33.8 298 15.7 233.1C10.4 214.4 1.5 99.4 1.5 83.9c0-77.8 68.2-53.4 110.3-21.8z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://x.com/terdelyi/" target="_blank" rel="noopener noreferrer"
                                   class="hover:text-accent" aria-label="X">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                         class="hover:fill-accent fill-body dark:fill-content/80 dark:hover:fill-content inline-block h-7 w-7">
                                        <!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://soundcloud.com/terdelyi/" target="_blank" rel="noopener noreferrer"
                                   class="hover:text-accent" aria-label="Soundcloud">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                         class="hover:fill-accent fill-body dark:fill-content/80 dark:hover:fill-content inline-block h-9 w-9">
                                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path d="M111.4 256.3l5.8 65-5.8 68.3c-.3 2.5-2.2 4.4-4.4 4.4s-4.2-1.9-4.2-4.4l-5.6-68.3 5.6-65c0-2.2 1.9-4.2 4.2-4.2 2.2 0 4.1 2 4.4 4.2zm21.4-45.6c-2.8 0-4.7 2.2-5 5l-5 105.6 5 68.3c.3 2.8 2.2 5 5 5 2.5 0 4.7-2.2 4.7-5l5.8-68.3-5.8-105.6c0-2.8-2.2-5-4.7-5zm25.5-24.1c-3.1 0-5.3 2.2-5.6 5.3l-4.4 130 4.4 67.8c.3 3.1 2.5 5.3 5.6 5.3 2.8 0 5.3-2.2 5.3-5.3l5.3-67.8-5.3-130c0-3.1-2.5-5.3-5.3-5.3zM7.2 283.2c-1.4 0-2.2 1.1-2.5 2.5L0 321.3l4.7 35c.3 1.4 1.1 2.5 2.5 2.5s2.2-1.1 2.5-2.5l5.6-35-5.6-35.6c-.3-1.4-1.1-2.5-2.5-2.5zm23.6-21.9c-1.4 0-2.5 1.1-2.5 2.5l-6.4 57.5 6.4 56.1c0 1.7 1.1 2.8 2.5 2.8s2.5-1.1 2.8-2.5l7.2-56.4-7.2-57.5c-.3-1.4-1.4-2.5-2.8-2.5zm25.3-11.4c-1.7 0-3.1 1.4-3.3 3.3L47 321.3l5.8 65.8c.3 1.7 1.7 3.1 3.3 3.1 1.7 0 3.1-1.4 3.1-3.1l6.9-65.8-6.9-68.1c0-1.9-1.4-3.3-3.1-3.3zm25.3-2.2c-1.9 0-3.6 1.4-3.6 3.6l-5.8 70 5.8 67.8c0 2.2 1.7 3.6 3.6 3.6s3.6-1.4 3.9-3.6l6.4-67.8-6.4-70c-.3-2.2-2-3.6-3.9-3.6zm241.4-110.9c-1.1-.8-2.8-1.4-4.2-1.4-2.2 0-4.2.8-5.6 1.9-1.9 1.7-3.1 4.2-3.3 6.7v.8l-3.3 176.7 1.7 32.5 1.7 31.7c.3 4.7 4.2 8.6 8.9 8.6s8.6-3.9 8.6-8.6l3.9-64.2-3.9-177.5c-.4-3-2-5.8-4.5-7.2zm-26.7 15.3c-1.4-.8-2.8-1.4-4.4-1.4s-3.1.6-4.4 1.4c-2.2 1.4-3.6 3.9-3.6 6.7l-.3 1.7-2.8 160.8s0 .3 3.1 65.6v.3c0 1.7.6 3.3 1.7 4.7 1.7 1.9 3.9 3.1 6.4 3.1 2.2 0 4.2-1.1 5.6-2.5 1.7-1.4 2.5-3.3 2.5-5.6l.3-6.7 3.1-58.6-3.3-162.8c-.3-2.8-1.7-5.3-3.9-6.7zm-111.4 22.5c-3.1 0-5.8 2.8-5.8 6.1l-4.4 140.6 4.4 67.2c.3 3.3 2.8 5.8 5.8 5.8 3.3 0 5.8-2.5 6.1-5.8l5-67.2-5-140.6c-.2-3.3-2.7-6.1-6.1-6.1zm376.7 62.8c-10.8 0-21.1 2.2-30.6 6.1-6.4-70.8-65.8-126.4-138.3-126.4-17.8 0-35 3.3-50.3 9.4-6.1 2.2-7.8 4.4-7.8 9.2v249.7c0 5 3.9 8.6 8.6 9.2h218.3c43.3 0 78.6-35 78.6-78.3.1-43.6-35.2-78.9-78.5-78.9zm-296.7-60.3c-4.2 0-7.5 3.3-7.8 7.8l-3.3 136.7 3.3 65.6c.3 4.2 3.6 7.5 7.8 7.5 4.2 0 7.5-3.3 7.5-7.5l3.9-65.6-3.9-136.7c-.3-4.5-3.3-7.8-7.5-7.8zm-53.6-7.8c-3.3 0-6.4 3.1-6.4 6.7l-3.9 145.3 3.9 66.9c.3 3.6 3.1 6.4 6.4 6.4 3.6 0 6.4-2.8 6.7-6.4l4.4-66.9-4.4-145.3c-.3-3.6-3.1-6.7-6.7-6.7zm26.7 3.4c-3.9 0-6.9 3.1-6.9 6.9L227 321.3l3.9 66.4c.3 3.9 3.1 6.9 6.9 6.9s6.9-3.1 6.9-6.9l4.2-66.4-4.2-141.7c0-3.9-3-6.9-6.9-6.9z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://mixcloud.com/terdelyi/" target="_blank" rel="noopener noreferrer"
                                   class="hover:text-accent" aria-label="Mixcloud">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                         class="hover:fill-accent fill-body dark:fill-content/80 dark:hover:fill-content inline-block h-9 w-9">
                                        <!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                        <path d="M213 346.6H179.8V195.1L186 173.5H175.3L137.1 346.6H76.1L37.7 173.5H27.3L33.2 195.1V346.6H0V165H65.7L102.2 338.1H110.7L147.3 165H213L213 346.6zM544.5 283.6L458.4 345.7V307.5L531.3 255.8L458.4 204V165.9L544.5 228.2H553.7L640 165.9V204L566.9 255.8L640 307.5V345.7L553.7 283.6H544.5zM430.2 272.3H248.1V239.3H430.2V272.3z"/>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block w-full lg:w-2/5 p-5 pr-0">
                <img class="w-full -mt-3 drop-shadow-lg" title="Definitely not Kevin Smith" alt="Not Kevin Smith"
                     src="<?php echo asset('images/me.png'); ?>"/>
            </div>
        </div>
    </div>

<?php include 'content/pages/_partials/footer.php'; ?>