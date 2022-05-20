
        function capture() {
            html2canvas(document.getElementById("main"), {
                letterRendering: 1,
                allowTaint: true,
                useCORS: true,
            })
                .then(function (canvas) {
                    document.getElementById("result").src = canvas.toDataURL("image/png", 0.5);
                })
                .catch((e) => {
                    alert(e);
                });
        }
