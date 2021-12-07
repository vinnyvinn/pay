<template>
<div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <inertia-link :href="$route('dashboard.index')" class="navbar-brand">Flex Loan</inertia-link>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <inertia-link :href="$route('loans.index')" class="nav-link">Loans</inertia-link>
                    </li>
                    <li class="nav-item">
                        <inertia-link :href="$route('loan-types.index')" class="nav-link">Loan Types</inertia-link>
                    </li>
                    <li class="nav-item">
                        <inertia-link :href="$route('interests.index')" class="nav-link">Interests</inertia-link>
                    </li>
                    <li class="nav-item">
                        <inertia-link :href="$route('interest-types.index')" class="nav-link">Interest Types</inertia-link>
                    </li>
                    <li class="nav-item">
                        <inertia-link :href="$route('credit-scores.index')" class="nav-link">Credit Scores</inertia-link>
                    </li>
                    <li class="nav-item">
                        <inertia-link :href="$route('credit-score-types.index')" class="nav-link">Credit Score Types</inertia-link>
                    </li>

                </ul>
            </div>


            <div class="navbar-collapse collapse order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" v-if="!user">
                        <inertia-link href="/" class="nav-link">Login</inertia-link>
                    </li>
                    <li class="nav-item" v-if="!user">
                        <inertia-link :href="$route('register.user')" class="nav-link">Register</inertia-link>
                    </li>

                    <li class="nav-item" v-if="user">
                        <span class="navbar-text" v-if="user">
                            Logged in as   {{user.name}}
                        </span>
                        <inertia-link href="/" as="button" method="post" class="nav-link logout-link" style="display: inline" type="button">Logout</inertia-link>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>
</template>

<script>

export default {
    props:['user'],

    created() {
        console.log(this.user)
    }
}
</script>

<style scoped>

</style>
