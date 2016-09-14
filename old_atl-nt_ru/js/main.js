$('document').ready(function(){

    new WOW().init();
    $(window).bind('scroll', function(){findScroll(window)});
    
    inp = $(document).find('input[name="phone"]');
    len = inp.length;
    
    for(j=0;j<len;j++) {
         $(inp[j]).bind('keypress', function(event){return separate.filter(event,'nPhone')});
         par = inp[j].parentNode;
         if(par.nodeName == 'DIV') {par = inp[j].parentNode.parentNode;}
         btn = $(par).find('button');
         btn[0].disabled = true;
    }

    $('#premiumOrder').bind('click', function(){modal.open('premium')});
    $('#buisnessOrder').bind('click', function(){modal.open('buisness')});
    $('#basedOrder').bind('click', function(){modal.open('based')});
    $('#want_cottage').bind('click', function(){modal.open('based')});
    $('#want_elite').bind('click', function(){modal.open('elite')});
    $('#provocationButton').bind('click', function(){modal.open('elite')});   
    $('#show_other_advan').bind('click', function() {other.showAdvan()});
    $('#show_other_profit').bind('click', function() {other.showProfit()});
    $('#header_callback_order').bind('click', function(){return modal.open('callback')} )
    
    $('.close_modal').bind('click', function(){modal.close()});  

    var modal = {
         
         hinput : document.getElementById('hinput'),
         mod    : document.getElementById('modal'),
         
         open : function(param) {
               modal.hinput.value = param;
               modal.mod.style.display = 'block';
               return false;
         },

         close : function() {
               modal.hinput.value = '';
               modal.mod.style.display = 'none';
               return false;
         }          
              
    }
    
    var other = {
    
         showOtherAdvan  : document.getElementById('show_other_advan'),
         otherAdvan      : document.getElementById('other_advan'),
         seeAdvan        : document.getElementById('seeadvan'),
         
         showOtherProfit : document.getElementById('show_other_profit'),
         otherProfit     : document.getElementById('other_profit'),
         seeProfit       : document.getElementById('seeprofit'),
         
         showAdvan       : function() {
              other.showOtherAdvan.style.display = 'none';
              other.otherAdvan.style.display     = 'block';
              other.seeAdvan.style.display       = 'none';
         },
         
         showProfit     : function() {
              other.showOtherProfit.style.display = 'none';
              other.otherProfit.style.display     = 'block';
              other.seeProfit.style.display       = 'none';
         }   
    
    }     

});

var separate = {

     nPhone: function(c) { return ((c<48||c>57)&&c!=9&&c!=8&&c!=45&&c!=43&&c!=40&&c!=41&&c!=32&&c!=37&&c!=39&&c!=38&&c!=40) ? false : true },
                          
     filter: function(evt,type) {        
          (!evt) ? evt = event : null;
          code = evt.charCode ? evt.charCode : evt.keyCode ? evt.keyCode : evt.which ? evt.which : null;
          s = this[type](code);
          if(type=='nPhone') {return s ? this.resAlert(evt.target||evt.srcElement) : this.setAlert(evt.target||evt.srcElement);}

     },
     
     resAlert: function(elem) {
          elem.className='' ; 
          this.testValid(elem) ; 
          return true;
     },
     
     setAlert: function(elem) {
          elem.className='ierr' ; 
          return false;
     },
 
     testValid : function(elem) {
         setTimeout(function(){
              val = elem.value.replace(/[^0-9]/);
              if(val.length == 11) {
                   par = elem.parentNode;
                   if(par.nodeName == 'DIV') {par = elem.parentNode.parentNode;}
                   btn = $(par).find('button');
                   btn[0].disabled = false;
                   pre = val.substr(0,1);
                   pre += ' (';
                   pre += val.substr(1,3);
                   pre += ') ';
                   pre += val.substr(4,3);
                   pre += '-';
                   pre += val.substr(7,2);
                   pre += '-';
                   pre += val.substr(9.2);
                   elem.value = pre;          
              }
         }, 300);         
     }
            
}

function findScroll(elem) {

     scroll = elem.pageYOffset || elem.scrollTop;
     var table_scroll = $('#table').offset().top;
     console.log('1: ' + scroll, ' 2: ' + table_scroll);
     if((scroll > (table_scroll + 170))&&(scroll < (table_scroll + 1170))) {
          document.getElementById('pseudo_table_header').style.display = 'block'; 
     } else {
          document.getElementById('pseudo_table_header').style.display = 'none';
     }
}

