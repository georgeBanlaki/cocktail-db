<template>
    <header :class="{ 'scrolled-nav': scrollPosition} ">
        <nav class="px-5">
            <div class="d-flex py-5">
                <h3 class="text-center my-auto">The Cocktail DB</h3>
            </div>
            <ul v-show="!mobile" class="navigation">
                <!--                <li>-->
                <!--                    <input type="text" placeholder="Search..." class="bg-white rounded-xl px-3 py-1"/>-->
                <!--                </li>-->
                <li>
                    <Link class="link text-decoration-none" href="/">Home</Link>
                </li>
                <li>
                    <Link class="link text-decoration-none" href="/popular">Popular Coktails</Link>
                </li>
                <li>
                    <Link class="link text-decoration-none" href="/latest">Latest Cocktails</Link>
                </li>
                <li>
                    <Link class="link text-decoration-none" href="/random">Random Cocktails</Link>
                </li>
            </ul>
            <div class="icon">
                <i @click="toggleMobileNav" v-show="mobile" class="fa-solid fa-bars"
                   :class="{'icon-active': mobileNav}"></i>
            </div>
            <transition name="mobile-nav">
                <ul v-show="mobileNav" class="dropdown-nav pt-5">
                    <li>
                        <Link class="link text-decoration-none" href="/">Home</Link>
                    </li>
                    <li>
                        <Link class="link text-decoration-none" href="/popular">Popular Coktails</Link>
                    </li>
                    <li>
                        <Link class="link text-decoration-none" href="/latest">Latest Cocktails</Link>
                    </li>
                    <li>
                        <Link class="link text-decoration-none" href="/random">Random Cocktails</Link>
                    </li>
                </ul>
            </transition>
        </nav>
    </header>


    <transition name="page" mode="out-in" appear>
        <main :key="$page.url" class="container p-4 mx-auto mt-[60px] relative">
            <slot/>
        </main>
    </transition>

</template>

<script>
import {Link} from '@inertiajs/inertia-vue3';

export default {
    data() {
        return {
            scrollPosition: null,
            mobile: null,
            mobileNav: null,
            windowWidth: null
        }
    },
    created() {
        window.addEventListener('resize', this.checkScreen);
        this.checkScreen();
    },
    methods: {
        toggleMobileNav() {
            this.mobileNav = !this.mobileNav
        },
        checkScreen() {
            this.windowWidth = window.innerWidth;
            if (this.windowWidth <= 900) {
                this.mobile = true;
                return;
            }
            this.mobile = false;
            this.mobileNav = false;

        },
    },
    components: {
        Link
    },
    name: "Nav"
}
</script>

<style scoped>
.page-enter-active,
.page-leave-active {
    transition: all .1s;
}

.page-enter,
.page-leave-active {
    opacity: 0;
}

header {
    background-color: #263238;
    z-index: 99;
    width: 100%;
    position: fixed;
    transition: .5s ease all;
    color: #E0E0E0;
}

nav {
    position: relative;
    display: flex;
    flex-direction: row;
    padding: 12px 0;
    transition: .0s ease all;
    width: 90%;
    margin: 0 auto;

}

@media (min-width: 1140px) {
    nav {
        max-width: 1284px;
    }
}

ul, .link {
    font-weight: 500;
    color: #E0E0E0;
    list-style: none;
    text-decoration: none;

}

li {
    text-transform: uppercase;
    padding: 16px;
    margin-left: 16px;
}

.link {
    font-size: 14px;
    transition: .5s ease all;
    padding-bottom: 4px;
    border-bottom: 1px solid transparent
}

.link:hover {
    color: #00afea;
    border-color: #00afea;
}

.navigation {
    display: flex;
    align-items: center;
    flex: 1;
    justify-content: flex-end;
}

.icon {
    display: flex;
    position: absolute;
    top: 0;
    align-items: center;
    right: 24px;
    height: 100%;
}

i {
    cursor: pointer;
    font-size: 24px;
    transition: .8s ease all;

}

.icon-active {
    transform: rotate(180deg);
}

.dropdown-nav {
    display: flex;
    flex-direction: column;
    position: fixed;
    width: 100%;
    max-width: 250px;
    height: 100%;
    background-color: #263238;
    top: 0;
    left: 0;
}

.dropdown-nav > li {
    margin-left: 0;

}

.dropdown-nav > li > a {
    color: #fff;
}

.mobile-nav-enter-active, .mobile-nav-leave-active {
    transition: .6s ease all;
}

.mobile-nav-enter-from, .mobile-nav-leave-to {
    transform: translateX(-250px);
}

.mobile-nav-enter-to {
    transform: translateX(0);
}
</style>
