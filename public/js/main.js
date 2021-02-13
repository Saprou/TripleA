class Item extends HTMLElement {
    constructor(){
        super();
        var itemName=this.getAttribute('itemname');
        var imgLink=this.getAttribute('imglink');
        var itemLink=itemLink="item/"+itemName;
        this.innerHTML='<a href='+itemLink+'><img src="'+imgLink+'" alt=""> <h4> '+itemName+' </h4></a>';
    }

}
window.customElements.define('food-item',Item);
$(document).ready(function(){
    $('.loginB').on('click',function(){
        $('.loginMenu').toggle();
    })
    /********************* */
    $width=$('.welcomeViewerContainer').width();
    $num=0;
    $(".rightArrow").on('click',function(){
        if($num<2){
            $(".welcomeViewer").css({
                transform:"translateX(-"+($width*++$num)+"px)"
            })
        }
})
    $(".leftArrow").on('click',function(){
        if($num>0){
            $(".welcomeViewer").css({
                transform:"translateX(-"+($width*--$num)+"px)"
            })
        }
})
})