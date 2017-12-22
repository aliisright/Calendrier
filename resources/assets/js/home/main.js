new Vue({
  el: '#app',

  data: {

    hey: 'qsd',

    title: 'Manger',

  },

  methods:{
  	randomQuote : function(){
  		const quote = quotes[Math.floor(Math.random()*items.length)];
  	}
  }



  // 1 : choix aleatoire de citation
  // 2: insérer une couleur -> peut etre une class avec sa définition en css ?
});








$('.lettre').hover(
       function(){ $(this).addClass('bounce') },
       function(){ $(this).removeClass('bounce') }
)
