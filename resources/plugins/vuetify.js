import 'vuetify/styles' // Global CSS has to be imported
import {createApp} from 'vue'
import {createVuetify} from 'vuetify'
import App from '../js/Shared/Nav.vue'

export const app = createApp(App)
export const vuetify = createVuetify({
    theme: {
        defaultTheme: 'dark'
    }
}) // Replaces new Vuetify()

app.use(vuetify)
