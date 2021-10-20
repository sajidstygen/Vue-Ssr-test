<template>
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">{{ title }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><router-link :to="{ name: 'about' }">About</router-link></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><router-link :to="{ name: 'contact' }">Contact</router-link></a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>



        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <h2><router-view></router-view></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: 'Welcome To My Site'
            }
        },
        // metaInfo: {
        //     title: 'Default App Title',
        //     titleTemplate: '%s | vue-meta Example App',
        //     htmlAttrs: {
        //     lang: 'en-US'
        //     },
        //     meta: [
        //         { name: 'description', content: 'An example Vue application with vue-meta.' },
        //         { name: 'title', content: 'An example Vue title with vue-meta.' }
        //     ]
        // },
    }
</script>
