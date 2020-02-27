<template>
    <div>
        <b-navbar toggleable="lg" fixed="top">
            <b-navbar-brand class="h-auto">
                <b-img class="img-fluid" src="https://via.placeholder.com/150x40/FFFFFF?text=LOGO" alt="Logo"></b-img>
            </b-navbar-brand>  

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" class="text-white" is-nav>
                <b-navbar-nav class="ml-auto">
                    <b-nav-item
                        v-for="(item, index) in items"
                        :key="index"
                        :to="item.route"
                    >
                        {{ item.title }}
                    </b-nav-item>
                    <!-- <b-nav-item href="#">Login</b-nav-item> -->

                    <b-nav-item-dropdown right>
                        <template v-slot:button-content>
                            <em>Menu</em>
                        </template>
                        
                        <b-dropdown-item href="#">Profile</b-dropdown-item>
                        <b-dropdown-item href="#">Sign Out</b-dropdown-item>
                    </b-nav-item-dropdown>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </div>
    
</template>

<script>
export default {
    data: () => ({
        items: [
            { title: 'Home', route: '/home' },
            { title: 'About Us', route: '/about' },
            { title: 'Product', route: '/product' },
            { title: 'Member', route: '/member' }
        ]
    }),
    mounted() {
        this.$nextTick(function(){
            var navbar = document.getElementsByClassName("navbar")[0].classList

            window.addEventListener("scroll", function(){
                 navbar.toggle("active", document.documentElement.scrollTop > 50)
            })        
        })
    },
}
</script>

<style>
ul:focus {outline:0;}

.navbar {
    transition: all 0.4s;
}

.navbar .nav-link {
    color: #fff;
}

.navbar-light .navbar-nav .nav-link {
    color: #fff;
}

/* Change navbar styling on scroll */
.navbar.active {
    background: #fff;
    box-shadow: 1px 2px 10px rgba(0, 0, 0, 0.1);
}

.navbar.active .nav-link {
    color: #555;
}

.navbar.active .nav-link:hover,
.navbar.active .nav-link:focus {
    color: #555;
    text-decoration: none;
}

.navbar.active .navbar-brand {
    color: #555;
}


/* Change navbar styling on small viewports */
@media (max-width: 991.98px) {
    .navbar {
        background: #fff;
    }

    .navbar .navbar-brand, .navbar .nav-link {
        color: #555;
    }
}

.router-link-active {
    color: orange!important;
}
</style>
