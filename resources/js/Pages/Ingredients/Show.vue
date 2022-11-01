<template>
    <Nav>
        <v-container
            class="screen-h px-5"
            style=" max-width: 1248px;">
            <div class="mt-16 pt-16">
                <h1 class="my-5 border-b pb-5">{{ ingredient[0].strIngredient }}</h1>
                <v-row class="mt-5">
                    <v-col
                        cols="12"
                        md="6"
                        class="w-100"
                    >


                        <v-img
                            :src="'https://www.thecocktaildb.com/images/ingredients/'+ ingredient[0].strIngredient+'.png'"
                            height="auto"
                            class="mx-auto"
                            max-width="600px"
                            :id="ingredient[0].strIngredient"
                        ></v-img>


                    </v-col>
                    <v-col
                        col="12"
                        md="6"
                        class="w-100 mx-auto my-auto max-h"
                    >
                        <h3 class="pb-16">{{ ingredient[0].strDescription }} </h3>
                    </v-col>
                </v-row>
            </div>
        </v-container>
    </Nav>
</template>

<script>
import Nav from '../../Shared/Nav.vue'

export default {
    name: "Show",
    props: {
        ingredient: Array
    },
    components: {
        Nav
    }
}
</script>

<style scoped>

.screen-h {
    min-height: calc(100vh - 65px);
}

.max-h {
    max-height: 550px;
    overflow: scroll;
}

h1, h3 {
    color: #E0E0E0;
}

</style>
