var slideimages = new Array() // create new array to preload images
slideimages[0] = new Image() // create new instance of image object
slideimages[0].src = "slide1.jpg" // set image src property to image path, preloading image in the process
slideimages[1] = new Image()
slideimages[1].src = "slide2.jpeg"
slideimages[2] = new Image()
slideimages[2].src = "slide3.jpg"
slideimages[3] = new Image()
slideimages[3].src = "slide4.jpg"


var step=0

function slideit(){
 
 document.getElementById('slide').src = slideimages[step].src
 if (step<3)
  step++
 else
  step=0
 
 setTimeout("slideit()",1500)
}
function radios(x){
	document.getElementById('slide').src=slideimages[x].src;
	}
	
