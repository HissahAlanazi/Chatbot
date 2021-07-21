var Firstslider= document.getElementById("FirstSliderRange");
	var FirstValue= document.getElementById("FirstValue");

	FirstValue.innerHTML = Firstslider.value;
	Firstslider.oninput = function(){
		FirstValue.innerHTML = this.value;
	}

	Firstslider.addEventListener("mousemove",function(){
		var x =Firstslider.value;
		var color ='linear-gradient(90deg,rgb(159 ,189 ,214)'+ x +'%,rgb(214,214,214)'+ x +'%)';
		Firstslider.style.background = color;
	})

		var SecondSlider= document.getElementById("SecondSliderRange");
		var Secondvalue= document.getElementById("Secondvalue");

		Secondvalue.innerHTML = SecondSlider.value;
		SecondSlider.oninput = function(){
			Secondvalue.innerHTML = this.value;
		}

		SecondSlider.addEventListener("mousemove",function(){
			var x =SecondSlider.value;
			var color ='linear-gradient(90deg,rgb(159, 189, 214)'+ x +'%,rgb(214,214,214)'+ x +'%)';
			SecondSlider.style.background = color;
		})



			var ThirdSlider= document.getElementById("ThirdSliderRange");
			var output= document.getElementById("Thierdvalue");

			output.innerHTML = ThirdSlider.value;
			ThirdSlider.oninput = function(){
				output.innerHTML = this.value;
			}

			ThirdSlider.addEventListener("mousemove",function(){
				var x =ThirdSlider.value;
				var color ='linear-gradient(90deg,rgb(159, 189, 214)'+ x +'%,rgb(214,214,214)'+ x +'%)';
				ThirdSlider.style.background = color;
			})

				var FourthSlider= document.getElementById("FourthSliderRange");
				var Fourthvalue= document.getElementById("Fourthvalue");

				Fourthvalue.innerHTML = FourthSlider.value;
				FourthSlider.oninput = function(){
					Fourthvalue.innerHTML = this.value;
				}

				FourthSlider.addEventListener("mousemove",function(){
				var x =FourthSlider.value;
				var color ='linear-gradient(90deg,rgb(159, 189, 214)'+ x +'%,rgb(214,214,214)'+ x +'%)';
				FourthSlider.style.background = color;
				})

				    var FifthSlider= document.getElementById("FifthSliderRange");
					var Fifthvalue= document.getElementById("Fifthvalue");

					Fifthvalue.innerHTML = FifthSlider.value;
					FifthSlider.oninput = function(){
						Fifthvalue.innerHTML = this.value;
					}

					FifthSlider.addEventListener("mousemove",function(){
						var x =FifthSlider.value;
						var color ='linear-gradient(90deg,rgb(159, 189, 214)'+ x +'%,rgb(214,214,214)'+ x +'%)';
						FifthSlider.style.background = color;
					})

						var SixthSlider= document.getElementById("SixthSliderRange");
						var Sixthvalue= document.getElementById("Sixthvalue");

						Sixthvalue.innerHTML = SixthSlider.value;
						SixthSlider.oninput = function(){
							Sixthvalue.innerHTML = this.value;
						}

						SixthSlider.addEventListener("mousemove",function(){
							var x =SixthSlider.value;
							var color ='linear-gradient(90deg,rgb(159, 189, 214)'+ x +'%,rgb(214,214,214)'+ x +'%)';
							SixthSlider.style.background = color;
						})
