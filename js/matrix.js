 var c = document.getElementById("canvas");
 var can = $("#canvas");
            var ctx = c.getContext("2d");
            c.height = can.height();//window.innerHeight;
            c.width = can.width(); //window.innerWidth;
            var matrix_text = "A!B@C#D$E%F^G&H*I(J)K_-=+;\'LMNO/.\"QRST~`UVW[]|><XYZ";
            matrix_text = matrix_text.split("");

            var font_size = 11;
            var columns = c.width / font_size; //colums
            var drops = [];
            for (var x = 0; x < columns; x++)
                drops[x] = Math.floor(Math.random()*window.innerHeight);
            function draw()
            {
                ctx.fillStyle = "rgba(240, 95, 64, 0.05)";
                ctx.fillRect(0, 0, c.width, c.height);
                /*var hex = '#';
				var range = 'ABCDEF0123456789';
				for (var i = 0; i < 6; i++ ) {
					hex += range.charAt(Math.floor(Math.random() * range.length));
				}*/
				//hex = ["#ef9a9a" , "#e57373" , "#ef5350" , "#f44336" , "#e53935" , "#d32f2f" , "#ff8a80" , "#ff5252" , "#d50000"];
				hex = ["#9e9e9e" , "#f5f5f5" , "#e0e0e0" , "#bdbdbd" , "#9e9e9e" , "#757575" , "#a1887f" , "#d7ccc8"]; 
                /*var r = Math.floor(Math.random()*255);
                var g = Math.floor(Math.random()*255);
                var b = Math.floor(Math.random()*255);*/
                //ctx.fillStyle = 'rgb('+r+','+g+','+b+')';//"#0F0"; //green text
                ctx.fillStyle = hex[Math.floor(Math.random() * hex.length)];
                ctx.font = font_size + "px arial";
                for (var i = 0; i < drops.length; i++)
                {
                   
                    var text = matrix_text[Math.floor(Math.random() * matrix_text.length)];
                    ctx.fillText(text, i * font_size, drops[i] * font_size);
                    if (drops[i] * font_size > c.height && Math.random() > 0.975)
                        drops[i] = 0;
                    drops[i]++;
                }
            }

            setInterval(draw, 33);


