var crsr=document.querySelector("#cursor")
var blur=document.querySelector("#cursor-blur")
document.addEventListener("mousemove",function(dets){
    const delay=300;
    const delayBlur=600;
    setTimeout(function(){
        crsr.style.left=dets.x+"px",
        crsr.style.top=dets.y+"px"
       
    },delay);
    setTimeout(function(){
        blur.style.left=dets.x-250+"px",
        blur.style.top=dets.y-250+"px"
       
    },delayBlur);

})


gsap.to(".nav-container",{
    
    height:"80px",
    duration:1,
    scrollTrigger:{
        trigger:".nav-container",
        scroller:"body",
        start:"top -100",
        scrub:2
    }

})

gsap.to("#main",{
    backgroundColor:"black",
    scrollTrigger:{
        trigger:"#main",
        scroller:"body",
        start:"top -30%",
        end:"top -80%",
        scrub:2
    }
})
gsap.from("#page3 #hidden-text-contact",{
    y:20,
    scrollTrigger:{
        trigger:"#page3 #hidden-text-contact",
        scroller:"body",
        start:"top 85%",
        end:"top 60%",
        scrub:3,


    }
})