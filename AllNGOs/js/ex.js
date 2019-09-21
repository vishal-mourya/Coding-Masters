 <script>
var i=0;
var images=[];
var time=1000;
images[0]='canteen.jpg';
images[1]='canteen.jpg';
images[3]='canteen.jpg';
images[4]='canteen.jpg';
fuction changeImg(){
document.slide.src=images[i];
    if(i<length.image-1){
        i++;
    }else{
        i=0;
    }
    setTimeout("changeImg()",time);
}
window.onload=changeImg;



</script>

<img name="slide" width="400" height="200">