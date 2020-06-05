
         var Banners=new Array('img/pic1.jpg','img/pic2.jpg','img/pic3.jpg');
var curr=0;
function dispBan()
{
if(document.images)
{
curr++;
if(curr==Banners.length)
{
curr=0;
}
document.Rotate.src=Banners[curr];
setTimeout("dispBan()",5000);
}
}
    