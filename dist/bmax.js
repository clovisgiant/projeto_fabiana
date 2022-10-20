$(document).ready(function(){
  $('button').click(function(){
    $('.speech-bubble').hide();
    $('.overlay').fadeIn(300, function(){
      $('.green-line').addClass("scan"); })
    
    setTimeout(function(){
      $('.overlay').fadeOut(300, function(){
         $('.green-line').removeClass("scan");
        $('.result').fadeIn("fast", function(){
          var x = (Math.floor(Math.random()*41)  + 60);
          var y =  (Math.floor(Math.random()*41)  + 60);
          var z =  (Math.floor(Math.random()*41)  + 60);
          
          var d = new Date();
          var day = d.getDay();
          
          $(".first").css({"height" : parseInt(x  * 1.5)+"px"});
          $(".first .day").html(Day(day) + "<br>" + x+"%");
          $(".second").css({"height" : parseInt(y  * 1.5)+"px"});
          $(".second .day").html(Day(day + 1)+ "<br>" + y+"%");
          $(".third").css({"height" : parseInt(z  * 1.5)+"px"});
          $(".third .day").html(Day(day + 2)+ "<br>" + z+"%");
        });
      });
    }, 5000);
    
    });
    
});

function Day(a){
  switch(a)
  {
    case 0:
    case 7:
      return "Sun";
    case 1:
    case 8:
      return "Mon";
    case 2:
      return "Tue";
    case 3:
      return "Wed";
    case 4:
      return "Thu";
    case 5:
      return "Fri";
    case 6:
      return "Sat";
  }
}