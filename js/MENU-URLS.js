/* LOS MAS VISTO*/
var demo = new Vue(
{
    el: '#img-lomasvisto',
    data: {
        searchString: "",
        articles: [
            {
                
                "title": "J Balvin estrenó Ma G, sencillo en el cual presenta a Castilla, el barrio que lo vió nacer ",
                "url": "2021/j-balvin-estrenp-ma-g-sencillo-en-el-cual-presenta-a-castilla-el-barrio-que-lo-vio-nacer",
                "image": "images/ma-g.jpg"
            },
        ]
    },
    computed: {
        filteredArticles: function () {
            var articles_array = this.articles,
                searchString = this.searchString;
            if(!searchString){
                return articles_array;
            }
            searchString = searchString.trim().toLowerCase();

            articles_array = articles_array.filter(function(item){
                if(item.title.toLowerCase().indexOf(searchString) !== -1){
                    return item;
                }
            })
            return articles_array;;
        }
    }
});

/* ULTIMAS HISTORIAS*/
var demo = new Vue({
    el: '#ultimas-historias',
    data: {
    searchString: "",
        articles: [
            {
                "title": "“Las Nenas” ¡Mandan! Natti Natasha Presenta Su Nueva Canción ft Farina, Cazzu y La Duraca",
                "url": "2021/las-nenas-mandan-natti-natasha-presenta-su-nueva-cancion-ft-farina-cazzu-y-la-duraca ",         
            },
            {
                "title": "Farruko Habla Sobre Sus Nuevos Sencillos! Un Abrebocas De Su Proximo Álbum",
                "url": "2021/farruko-habla-sobre-sus-nuevos-sencillos-un-abrebocas-de-su-proximo-album",   
            },
            {
                "title": "HEAR THIS MUSIC PRESENTA: “ALOHA” Un Junte Inesperado Y Muy ¡Explosivo!",
                "url": "2021/hear-this-music-presenta-aloha-un-junte-inesperado-y-muy-explosivo",
            },
             
            
        ]  
    },
    computed: {
        filteredArticles: function () {
            var articles_array = this.articles,
                searchString = this.searchString;
            if(!searchString){
                return articles_array;
            }
            searchString = searchString.trim().toLowerCase();
            articles_array = articles_array.filter(function(item){
                if(item.title.toLowerCase().indexOf(searchString) !== -1){
                    return item;
                }
            })
            return articles_array;;
        }
    }
});


/* MENU ORDENADOR */
var demo = new Vue({
    el: '#Menu-ordenador',
    data: {
    searchString: "",
        articles: [
           {
                "title": "INICIO",
                "url": "https://explosivog.com/",
            },
            {
                "title": "NOTICIAS",
                "url": "https://explosivog.com/noticias",
            },
            {
                "title": "MÚSICA",
                "url": "https://explosivog.com/musica",
            },
            {
                "title": "SHOWS",
                "url": "",
            },
        ]  
    },
    computed: {
        filteredArticles: function () {
            var articles_array = this.articles,
                searchString = this.searchString;
            if(!searchString){
                return articles_array;
            }
            searchString = searchString.trim().toLowerCase();
            articles_array = articles_array.filter(function(item){
                if(item.title.toLowerCase().indexOf(searchString) !== -1){
                    return item;
                }
            })
            return articles_array;;
        }
    }
});
/* MENU RESPONSIVE */
var demo = new Vue({
    el: '#Menu-responsive',
    data: {
    searchString: "",
        articles: [
            {
                "title": "INICIO",
                "url": "https://explosivog.com/",
            },
            {
                "title": "NOTICIAS",
                "url": "https://explosivog.com/noticias",
            },
            {
                "title": "MÚSICA",
                "url": "https://explosivog.com/musica",
            },
            {
                "title": "SHOWS",
                "url": "",
            },
        ]  
    },
    computed: {
        filteredArticles: function () {
            var articles_array = this.articles,
                searchString = this.searchString;
            if(!searchString){
                return articles_array;
            }
            searchString = searchString.trim().toLowerCase();
            articles_array = articles_array.filter(function(item){
                if(item.title.toLowerCase().indexOf(searchString) !== -1){
                    return item;
                }
            })
            return articles_array;;
        }
    }
});

/* FOOTER */
var demo = new Vue({
    el: '#nuestros-links',
    data: {
    searchString: "",
        articles: [
           {
                "title": "Inicio",
                "url": "https://explosivog.com/",
            },
           {
                "title": "Noticias",
                "url": "https://explosivog.com/noticias",
            },
            {
                "title": "Musica",
                "url": "https://explosivog.com/musica",
            },
            {
                "title": "Shows",
                "url": "",
            }
        ]  
    },
    computed: {
        filteredArticles: function () {
            var articles_array = this.articles,
                searchString = this.searchString;
            if(!searchString){
                return articles_array;
            }
            searchString = searchString.trim().toLowerCase();
            articles_array = articles_array.filter(function(item){
                if(item.title.toLowerCase().indexOf(searchString) !== -1){
                    return item;
                }
            })
            return articles_array;;
        }
    }
});

var demo = new Vue({
    el: '#nuestros-canales',
    data: {
    searchString: "",
        articles: [
           {
                "title": "Instagram",
                "url": "https://www.instagram.com/explosivog/?hl=es-la",
            },
            {
                "title": "Facebook",
                "url": "https://www.facebook.com/explosivog/",
            },
            {
                "title": "Youtube",
                "url": "https://www.youtube.com/explosivog",
            },
            {
                "title": "Spotify",
                "url": "https://open.spotify.com/user/apwdmpx6lr962qnukmk3chluc",
            }
        ]  
    },
    computed: {
        filteredArticles: function () {
            var articles_array = this.articles,
                searchString = this.searchString;
            if(!searchString){
                return articles_array;
            }
            searchString = searchString.trim().toLowerCase();
            articles_array = articles_array.filter(function(item){
                if(item.title.toLowerCase().indexOf(searchString) !== -1){
                    return item;
                }
            })
            return articles_array;;
        }
    }
});

var demo = new Vue({
    el: '#contacto',
    data: {
    searchString: "",
        articles: [
            {
                "title": "Únete a nosotros",
                "url": "https://api.whatsapp.com/send?phone=573007144773&text=Hola!%20me%20gustar%C3%ADa%20ser%20parte%20del%20equipo%20de%20EXPLOSIVO%20G%20%F0%9F%92%A3",
            },
            {
                "title": "Publicidad",
                "url": "https://api.whatsapp.com/send?phone=573007144773&text=Hola!%20me%20gustar%C3%ADa%20pautar%20en%20EXPLOSIVO%20G%20%F0%9F%92%A3",
            },
        ]  
    },
    computed: {
        filteredArticles: function () {
            var articles_array = this.articles,
                searchString = this.searchString;
            if(!searchString){
                return articles_array;
            }
            searchString = searchString.trim().toLowerCase();
            articles_array = articles_array.filter(function(item){
                if(item.title.toLowerCase().indexOf(searchString) !== -1){
                    return item;
                }
            })
            return articles_array;;
        }
    }
});


