//Assign a random card as "correct"
var div = $("div");
var items = div.find(".grid__item__img");
var length = $(".grid__item__img").length;
var random = Math.floor(Math.random() * length);
items.removeClass("grid__item__img-correct");
items.eq(random).addClass("grid__item__img-correct");

$("#feedback").hide();
//Add "-selected" class to the card that the user selects.
$(".grid__item__img").click(function () {
  $(".grid__item__img").removeClass("grid__item__img-selected");
  $(this).addClass("grid__item__img-selected");

  //Do something if div has both "-selected" & "-correct" class
  if ($(this).hasClass("grid__item__img-correct")) {
    $("#feedback__title").text("You have great intuition!");
    $("#feedback__desc").text("You picked the correct card.");
  } else {
    $("#feedback__title").text("Sorry.");
    $("#feedback__desc").text("That is not the correct card.");
  }
  $(".grid__item__img-correct").addClass("grid__item__img-correct-finish");
  $("#feedback").show();
});