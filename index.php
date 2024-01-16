<!-- Json: 
1. Creo cartella json e creo file con all’interno le info che poi richiamerò:                  [{“nome”:”Gino”, “cognome”: “Rossi”},         {“nome”: “Antonio”, “cognome”: “Verdi”}]         
2. Creo server.php e prendo file json:         $stringList = file_get_contents('./json/nomejson.json');
3. Avverto browser che sta ricevendo un json: header('Content-Type: application/json');
4. Lo stampo tramite : echo $stringList;

ABBIAMO API 
1. Importiamo tramite cdn dentro index.html: bootstrap, axios e js .
        Creo cartella per file js 
2. In file html mostro quello che riceviamo. Prima di creare v-for , vado a lavorare sullo SCRIPT. 

SCRIPT.JS: 

const { createApp } = Vue

createApp({
    data() {
        return {
                    apiUrl: “./server.php”, 
                    ArrayVuoto : [ ],
                    }
    },

devo chiamare api e sovrascriverla: 
        1. creo methods che crea songsList
        2. dentro faccio chiamata axios
        3.faccio hook per richiamarla tramite created()

    methods: {

            getSongsList(){
                axios.get(this.apiUrl).then((response)    =>{
                    this.songsList = response.data;
    
                    console.log(response.data);
                });
            }

        }
    },

    created(){
        this.getSongsList();
    }

}).mount('#app') -->