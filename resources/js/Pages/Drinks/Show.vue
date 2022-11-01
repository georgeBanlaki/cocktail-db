<template>
    <Nav>
        <v-container
            class="screen-h px-5 pt-16"
            style=" max-width: 1248px;">
            <div class="mt-16">
                <h1 class="my-5 border-b pb-5 pt-16">{{ drink[0].strDrink }}</h1>

                <v-row class="mt-5">
                    <v-col
                        cols="12"
                        md="6"
                        class="w-100"
                    >

                        <v-card
                            class="mx-auto bg-grey-darken-3"
                            max-width="600px"
                            :id="drink[0].idDrink"
                        >
                            <v-img
                                :src="drink[0].strDrinkThumb"
                                height="auto"

                            ></v-img>

                        </v-card>


                    </v-col>
                    <v-col
                        col="12"
                        md="6"
                        class="w-100 mx-auto"

                    >
                        <h2>Ingredients: </h2>
                        <v-row class="mx-auto mt-5">
                            <v-col class="mx-auto">
                                <Link class="text-decoration-none"
                                      v-if="drink[0].strIngredient1 !== null"
                                      :href="'/ingredient/' + drink[0].strIngredient1">
                                    <div
                                        class='mx-auto card'
                                        style="max-width: 200px;"
                                        :id="drink[0].strIngredient1"
                                        :key="drink[0].strIngredient1"
                                    >
                                        <v-img
                                            :src="'https://www.thecocktaildb.com/images/ingredients/'+ drink[0].strIngredient1+'.png'"
                                            height="auto"
                                            max-width="200px"
                                        ></v-img>

                                        <p class="text-center text-white"
                                           v-if="drink[0].strMeasure1 !== null"
                                        >{{
                                                drink[0].strMeasure1
                                            }} </p>
                                        <p class="text-center text-white"
                                           v-if="drink[0].strIngredient1 !== null"
                                        >{{
                                                drink[0].strIngredient1
                                            }}</p>


                                    </div>
                                </Link>

                            </v-col>
                            <v-col>
                                <Link class="text-decoration-none"
                                      v-if="drink[0].strIngredient2 !== null"
                                      :href="'/ingredient/' + drink[0].strIngredient2">
                                    <div class='mx-auto card' style="max-width: 200px;">
                                        <v-img
                                            :src="'https://www.thecocktaildb.com/images/ingredients/'+ drink[0].strIngredient2+'.png'"
                                            height="auto"
                                            max-width="200px"
                                        ></v-img>

                                        <p class="text-center text-white"
                                           v-if="drink[0].strMeasure2 !== null"
                                        >{{
                                                drink[0].strMeasure2
                                            }} </p>
                                        <p class="text-center text-white"
                                           v-if="drink[0].strIngredient2 !== null"
                                        >{{
                                                drink[0].strIngredient2
                                            }}</p>

                                    </div>
                                </Link>
                            </v-col>
                        </v-row>
                        <v-row class="mx-auto mt-5">
                            <v-col>
                                <Link class="text-decoration-none"
                                      v-if="drink[0].strIngredient3 !== null"
                                      :href="'/ingredient/' + drink[0].strIngredient3">
                                    <div class='mx-auto card' style="max-width: 200px;">
                                        <v-img
                                            :src="'https://www.thecocktaildb.com/images/ingredients/'+ drink[0].strIngredient3+'.png'"
                                            height="auto"
                                            max-width="200px"
                                        ></v-img>

                                        <p class="text-center text-white"
                                           v-if="drink[0].strMeasure3 !== null"
                                        >{{
                                                drink[0].strMeasure3
                                            }} </p>
                                        <p class="text-center text-white"
                                           v-if="drink[0].strIngredient3 !== null"
                                        >{{
                                                drink[0].strIngredient3
                                            }}</p>

                                    </div>
                                </Link>
                            </v-col>
                            <v-col>
                                <Link class="text-decoration-none"
                                      v-if="drink[0].strIngredient4 !== null"
                                      :href="'/ingredient/' + drink[0].strIngredient4">
                                    <div class='mx-auto card' style="max-width: 200px;">
                                        <v-img
                                            :src="'https://www.thecocktaildb.com/images/ingredients/'+ drink[0].strIngredient4+'.png'"
                                            height="auto"
                                            max-width="200px"
                                        ></v-img>

                                        <p class="text-center text-white"
                                           v-if="drink[0].strMeasure4 !== null"
                                        >{{
                                                drink[0].strMeasure4
                                            }} </p>
                                        <p class="text-center text-white"
                                           v-if="drink[0].strIngredient4 !== null"
                                        >{{
                                                drink[0].strIngredient4
                                            }}</p>

                                    </div>
                                </Link>
                            </v-col>
                        </v-row>


                    </v-col>
                </v-row>
                <v-row class="mt-5">
                    <v-col col="12"
                           md="6"
                           class="w-100 pl-0">
                        <v-chip
                            class="ma-2"
                            v-if="drink[0].strCategory !== null"
                        >
                            {{ drink[0].strCategory }}
                        </v-chip>
                        <v-chip
                            class="ma-2"
                            v-if="drink[0].strIBA !== null"
                        >
                            {{ drink[0].strIBA }}
                        </v-chip>
                        <v-chip
                            class="ma-2"
                            v-if="drink[0].strAlcoholic !== null"
                        >
                            {{ drink[0].strAlcoholic }}
                        </v-chip>
                        <v-chip
                            class="ma-2"
                            v-if="drink[0].strGlass !== null"
                        >
                            {{ drink[0].strGlass }}
                        </v-chip>
                    </v-col>


                </v-row>
                <v-row class=" mt-10 pb-10">
                    <v-col col="12"
                           md="6"
                           class="w-100">
                        <h2>Instructions:</h2>
                        <p>{{ drink[0].strInstructions }}</p>
                    </v-col>
                </v-row>
            </div>
        </v-container>
    </Nav>
</template>

<script>
import Nav from '../../Shared/Nav.vue'
import {Link} from '@inertiajs/inertia-vue3';

export default {
    name: "Show",
    props: {
        drink: Array,
    },
    components: {
        Nav,
        Link
    },
    methods: {
        hoverCard(selectedIndex) {
            this.selectedCard = selectedIndex
        },
        isSelected(cardIndex) {
            return this.selectedCard === cardIndex
        }
    }
}
</script>

<style scoped>

.screen-h {
    min-height: calc(100vh - 65px);
}


.card {
    /* the other rules */
    transition: all 0.3s ease-in-out;
}

.card:hover {
    transform: scale(1.05);
    transition: all 0.3s ease-in-out;
}

.v-chip {
    background-color: #37474F;
}

h1, h2, h3 {
    color: #E0E0E0;
}
</style>
