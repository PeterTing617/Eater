// List of images:
var images = ["images/one.jpg", "images/two.jpg", "images/three.jpeg", "images/four.jpg"];
// one.jpg - https://www.google.com/search?hl=en-MY&tbs=simg:CAQSoAIJ1H4xFdll9pAalAILELCMpwgaYgpgCAMSKLsXzAuTDLwXzR7cF7oXuBfFF8QX0yK3K-cpzyr4Ibgr7CmgKfAhvycaMJzQL_1qWmGyqoeRJ0yOBZ6UmAdkmegW6KmB7Woc7vxYTPy_1LU5IgU0WGoY-P6H0xbyAEDAsQjq7-CBoKCggIARIEW95pOwwLEJ3twQkajAEKFwoEYm93bNqliPYDCwoJL20vMDRra2dtCh0KCXNlcnZld2FyZdqliPYDDAoKL20vMGg4bjIydgodCgp3aW5lIGdsYXNz2qWI9gMLCgkvbS8wOXR2Y2QKGgoHcGxhdHRlctqliPYDCwoJL20vMDk5c3NwChcKBXNhbGFk2qWI9gMKCggvbS8wZ3J3MQw&sxsrf=ALeKk02z9qVQEXq1shZDlDXPgDHP6tIRCw:1604379495704&q=eating+in+south+africa&tbm=isch&sa=X&ved=2ahUKEwjKkLSvy-XsAhWg63MBHYiCCNIQwg4oAHoECBAQKw&biw=767&bih=712#imgrc=XGSwLJ0EQokyxM
// two.jpg - https://www.soichivang.com/dong-phuc/ao-dau-bep-thiet-ke-dep-chat-luong-cao-tai-quan-binh-thanh/
// three.jpeg - https://streetfoodakademia.blog.hu/2017/07/06/gyorskaja_vs_streetfood
//four.jpg - https://bobsambol.wordpress.com/2016/08/25/full-house-how-to-draw-more-customers-to-a-restaurant/
// Starting point:
var i = 0;
function slide(){
// Start with first image:
document.getElementById("slide").src = images[i];
if(i<images.length-1)
// Increment the slide with i++:
i++;
else
// When i=0 it means to loop the slideshow:
i=0;
}
// Time to change the slides per second:
setInterval(slide,2000)