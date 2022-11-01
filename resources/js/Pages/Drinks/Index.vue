<template>
    <Nav>
        <v-container
            class="screen-h px-5 pt-16"
            style=" max-width: 1248px;">
            <div class="mt-16">
                <h3 class="text-center pb-5">Browse by name</h3>
                <h3 class="text-center">
                    <a href="/browse/a">A</a> / <a href="/browse/b">B</a> / <a href="/browse/c">C</a>
                    / <a
                    href="/browse/d">D</a> / <a href="/browse/e">E</a> / <a href="/browse/f">F</a> /
                    <a
                        href="/browse/g">G</a> / <a href="/browse/h">H</a> / <a href="/browse/i">I</a>
                    / <a
                    href="/browse/j">J</a> / <a href="/browse/k">K</a> / <a href="/browse/l">L</a> /
                    <a
                        href="/browse/m">M</a> / <a href="/browse/n">N</a> / <a href="/browse/o">O</a>
                    / <a
                    href="/browse/p">P</a> / <a href="/browse/q">Q</a> / <a href="/browse/r">R</a> /
                    <a
                        href="/browse/s">S</a> / <a href="/browse/t">T</a> / <a href="/browse/u">U</a>
                    / <a
                    href="/browse/v">V</a> / <a href="/browse/w">W</a> / <a href="/browse/x">X</a> /
                    <a
                        href="/browse/y">Y</a> / <a href="/browse/z">Z</a></h3>
                <h2 class="my-5 border-b pb-5 pt-16">Cocktail of the day:
                    <i class="font-weight-light"> {{ randomDrink[0].strDrink }}</i></h2>

                <v-row class="mt-5">
                    <v-col
                        cols="12"
                        md="6"
                        class="w-100"
                    >

                        <v-card
                            class="mx-auto bg-grey-darken-3"
                            max-width="600px"
                            :id="randomDrink[0].idDrink"
                        >
                            <v-img
                                :src="randomDrink[0].strDrinkThumb"
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
                                      v-if="randomDrink[0].strIngredient1 !== null"
                                      :href="'/ingredient/' + randomDrink[0].strIngredient1">
                                    <div
                                        class='mx-auto card'
                                        style="max-width: 200px;"
                                        :id="randomDrink[0].strIngredient1"
                                        :key="randomDrink[0].strIngredient1"
                                    >
                                        <v-img
                                            :src="'https://www.thecocktaildb.com/images/ingredients/'+ randomDrink[0].strIngredient1+'.png'"
                                            height="auto"
                                            max-width="200px"
                                        ></v-img>

                                        <p class="text-center text-white"
                                           v-if="randomDrink[0].strMeasure1 !== null"
                                        >{{
                                                randomDrink[0].strMeasure1
                                            }} </p>
                                        <p class="text-center text-white"
                                           v-if="randomDrink[0].strIngredient1 !== null"
                                        >{{
                                                randomDrink[0].strIngredient1
                                            }}</p>


                                    </div>
                                </Link>

                            </v-col>
                            <v-col>
                                <Link class="text-decoration-none"
                                      v-if="randomDrink[0].strIngredient2 !== null"
                                      :href="'/ingredient/' + randomDrink[0].strIngredient2">
                                    <div class='mx-auto card' style="max-width: 200px;">
                                        <v-img
                                            :src="'https://www.thecocktaildb.com/images/ingredients/'+ randomDrink[0].strIngredient2+'.png'"
                                            height="auto"
                                            max-width="200px"
                                        ></v-img>

                                        <p class="text-center text-white"
                                           v-if="randomDrink[0].strMeasure2 !== null"
                                        >{{
                                                randomDrink[0].strMeasure2
                                            }} </p>
                                        <p class="text-center text-white"
                                           v-if="randomDrink[0].strIngredient2 !== null"
                                        >{{
                                                randomDrink[0].strIngredient2
                                            }}</p>

                                    </div>
                                </Link>
                            </v-col>
                        </v-row>
                        <v-row class="mx-auto mt-5">
                            <v-col>
                                <Link class="text-decoration-none"
                                      v-if="randomDrink[0].strIngredient3 !== null"
                                      :href="'/ingredient/' + randomDrink[0].strIngredient3">
                                    <div class='mx-auto card' style="max-width: 200px;">
                                        <v-img
                                            :src="'https://www.thecocktaildb.com/images/ingredients/'+ randomDrink[0].strIngredient3+'.png'"
                                            height="auto"
                                            max-width="200px"
                                        ></v-img>

                                        <p class="text-center text-white"
                                           v-if="randomDrink[0].strMeasure3 !== null"
                                        >{{
                                                randomDrink[0].strMeasure3
                                            }} </p>
                                        <p class="text-center text-white"
                                           v-if="randomDrink[0].strIngredient3 !== null"
                                        > {{
                                                randomDrink[0].strIngredient3
                                            }}</p>

                                    </div>
                                </Link>
                            </v-col>
                            <v-col>
                                <Link class="text-decoration-none"
                                      v-if="randomDrink[0].strIngredient4 !== null"
                                      :href="'/ingredient/' + randomDrink[0].strIngredient4">
                                    <div class='mx-auto card' style="max-width: 200px;">
                                        <v-img
                                            :src="'https://www.thecocktaildb.com/images/ingredients/'+ randomDrink[0].strIngredient4+'.png'"
                                            height="auto"
                                            max-width="200px"
                                        ></v-img>

                                        <p class="text-center text-white"
                                           v-if="randomDrink[0].strMeasure4 !== null"
                                        >{{
                                                randomDrink[0].strMeasure4
                                            }} </p>
                                        <p class="text-center text-white"
                                           v-if="randomDrink[0].strIngredient4 !== null"
                                        > {{
                                                randomDrink[0].strIngredient4
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
                            v-if="randomDrink[0].strCategory !== null"
                        >
                            {{ randomDrink[0].strCategory }}
                        </v-chip>
                        <v-chip
                            class="ma-2"
                            v-if="randomDrink[0].strIBA !== null"
                        >
                            {{ randomDrink[0].strIBA }}
                        </v-chip>
                        <v-chip
                            class="ma-2"
                            v-if="randomDrink[0].strAlcoholic !== null"
                        >
                            {{ randomDrink[0].strAlcoholic }}
                        </v-chip>
                        <v-chip
                            class="ma-2"
                            v-if="randomDrink[0].strGlass !== null"
                        >
                            {{ randomDrink[0].strGlass }}
                        </v-chip>
                    </v-col>


                </v-row>
                <v-row class=" mt-10 pb-10">
                    <v-col col="12"
                           md="6"
                           class="w-100">
                        <h2>Instructions:</h2>
                        <p>{{ randomDrink[0].strInstructions }}</p>
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
    props: {
        randomDrink: Object,
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

h1, h3 {
    color: #E0E0E0;
}

a {
    text-decoration: none;
    color: #00897B;
}
</style>
