
      function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var clockdiv = document.getElementById('clockdiv');

if(clockdiv){
  var deadline = new Date(Date.parse(clockdiv.getAttribute("data-date")));
  initializeClock('clockdiv', deadline);
}


activate_plan = function(){
  
  jQuery(".plan-image").removeClass("selected");
  jQuery(".plan-image[data-plan='" + this.selector + "']" ).addClass("selected");
  jQuery(".description").html( this.description );
 
  jQuery(".course-selector-row .selection").removeClass("selected");
  jQuery(".course-selector-row .selection i").attr("data-x-icon", " ");
  
  jQuery(".course-selector-row .selection." + this.selector).addClass("selected");
  jQuery(".selected .x-icon").attr("data-x-icon", "");
  
  jQuery(".more-info-button").attr("href", this.selector);
  
  this.switch_training_bars();
  this.switch_nutrient_bars();
}
switch_training_bars = function(){
  jQuery.each(this.training_bars, function(bar, amount){
    colour = 62 + Math.round( amount * 2 * 1.93 );
    if(bar == "protein" || bar == "carbohydrate" || bar == "fat"){
      rgb = "rgb( 68, 84, " + colour + ")"
    } else{
      rgb = "rgb(" + colour + ", 62, 62)";
    }
    
    stat_bar = jQuery("." + bar + " .bar");
    stat_bar.css("background-color", rgb);
    change_stat_bar( stat_bar, amount );
  })  
}
switch_nutrient_bars = function(){
  var that = this;
  jQuery(".macronutrient-breakdown .skill-bar-wrapper").each( function( i ){
    var skill_bar_wrapper = jQuery(this);
    if( i >= that.nutrients_bars.length ){
      skill_bar_wrapper.css("opacity", "0");
    } else{
      skill_bar_wrapper.css("opacity", "1");
  
      jQuery.each( that.nutrients_bars[i].stats, function( nutrient, value ){
        skill_bar_wrapper.children(".h-skill-bar").html(that.nutrients_bars[i].name);
        var bar = skill_bar_wrapper.find("." + nutrient).first();
        change_stat_bar( bar, value );
        bar.children(".percent").prepend( "<span>" + nutrient + "</span> ");
      });
    }
  });
}
change_stat_bar = function(stat_bar, amount){
  stat_bar.css("width", amount + "%" );
  stat_bar.children(".percent").html(amount + "%");
}

var plans = plans || []; 

jQuery.each(plans, function(i, course){
  course.activate = activate_plan,
  course.switch_nutrient_bars = switch_nutrient_bars,
  course.switch_training_bars = switch_training_bars
});

jQuery( document ).ready(function($){
  $(".course-selector-row .selection").each(function(){
    var button = $(this);
    button.click(function(){
      $.each( plans, function(i, plan){
        if( button.hasClass(plan.selector) ){
          $(".course-details-row").css("opacity", "1");
          plan.activate();
          return false;
        }
      })
    })
  })
})

jQuery('.purchase-button').click(function(){
	fbq('track', 'InitiateCheckout');
})

jQuery(".purchase-button").click( function(){
	trackOutboundLink( jQuery(this).attr("href") ); 
	return false;
})

jQuery(document).ready(function(){
   	jQuery('.owl-carousel').owlCarousel({
      margin:20,
      loop:true,
      autoWidth:true,
      items:4,
      center:true
		})
});


window.zEmbed||function(e,t){var n,o,d,i,s,a=[],r=document.createElement("iframe");window.zEmbed=function(){a.push(arguments)},window.zE=window.zE||window.zEmbed,r.src="javascript:false",r.title="",r.role="presentation",(r.frameElement||r).style.cssText="display: none",d=document.getElementsByTagName("script"),d=d[d.length-1],d.parentNode.insertBefore(r,d),i=r.contentWindow,s=i.document;try{o=s}catch(e){n=document.domain,r.src='javascript:var d=document.open();d.domain="'+n+'";void(0);',o=s}o.open()._l=function(){var o=this.createElement("script");n&&(this.domain=n),o.id="js-iframe-async",o.src=e,this.t=+new Date,this.zendeskHost=t,this.zEQueue=a,this.body.appendChild(o)},o.write('<body onload="document._l();">'),o.close()}("https://assets.zendesk.com/embeddable_framework/main.js","scottlaidler.zendesk.com");
    