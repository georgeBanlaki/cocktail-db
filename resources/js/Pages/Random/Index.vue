<template>
    <Nav>
        <v-container style="max-width: 1248px;" class="pt-16">
            <h1 class="mx-5 my-5 border-b pb-5 pt-16">Random Cocktails</h1>

            <v-row class="mt-5">
                <v-col

                    cols="12"
                    sm="6"

                    class="w-100"
                >
                    <Link
                        :href="'/drink/' + random[0].idDrink"
                        class="text-decoration-none"

                    >

                        <v-card
                            class="mx-auto"
                            max-width="550px"
                            :id="random[0].idDrink"
                            :key="random[0].idDrink"
                        >
                            <v-img
                                :src="random[0].strDrinkThumb"
                                height="auto"
                                max-width="600px"
                                max-height="550px"
                                cover
                                class="card mx-auto"
                            ></v-img>

                            <v-card-title class="text-xl-h4 pt-3">
                                {{ random[0].strDrink }}
                            </v-card-title>
                        </v-card>
                    </Link>

                </v-col>
                <v-col
                    cols="12"
                    sm="6"
                    class="w-100"
                >
                    <Link :href="'/drink/' + random[1].idDrink" class="text-decoration-none">
                        <v-card
                            class="mx-auto"
                            max-width="550px"
                            :id="random[1].idDrink"
                            :key="random[1].idDrink"
                        >

                            <v-img
                                :src="random[1].strDrinkThumb"
                                height="auto"
                                cover
                                class="card"
                            ></v-img>

                            <v-card-title class="text-xl-h4 pt-3">
                                {{ random[1].strDrink }}
                            </v-card-title>
                        </v-card>
                    </Link>


                </v-col>
            </v-row>

            <v-row class="mt-5">
                <v-col
                    v-for="drink in random.slice(2)"
                    :key="drink"
                    cols="12"
                    sm="6"
                    md="4"
                    class="w-100"
                >
                    <Link :href="'/drink/' + drink.idDrink" class="text-decoration-none">
                        <v-card
                            class=" mx-auto my-10"
                            max-width="344px"
                            :id="drink.idDrink"
                            :key="drink.idDrink"
                        >
                            <v-img
                                :src="drink.strDrinkThumb"
                                height="300px"
                                cover
                                class="card"
                            ></v-img>

                            <v-card-title class="pt-2">
                                {{ drink.strDrink }}
                            </v-card-title>
                        </v-card>
                    </Link>
                </v-col>
            </v-row>
        </v-container>
    </Nav>
</template>

<script>
import Nav from '../../Shared/Nav.vue'
import {Link} from '@inertiajs/inertia-vue3';

export default {
    name: "Index",
    props: {
        random: Array
    },
    components: {
        Nav,
        Link
    },
}
</script>

<style scoped>
.card {
    /* the other rules */
    transition: all 0.3s ease-in-out;
}

.card:hover {
    transform: scale(1.03);
    transition: all 0.3s ease-in-out;
}

.v-card-title {
    background-color: #37474F;
    color: #E0E0E0;
}

.v-chip {
    background-color: #37474F;
}

h1 {
    color: #E0E0E0;
}
</style>
