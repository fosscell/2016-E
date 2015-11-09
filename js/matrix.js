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
                ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
                ctx.fillRect(0, 0, c.width, c.height);
                var r = Math.floor(Math.random()*255);
                var g = Math.floor(Math.random()*255);
                var b = Math.floor(Math.random()*255);
                ctx.fillStyle = 'rgb('+r+','+g+','+b+')';//"#0F0"; //green text
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


