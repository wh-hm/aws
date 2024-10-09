
        var apiUrl = 'https://6wfjyj8pdg.execute-api.ap-northeast-1.amazonaws.com/testgomi/';

        var opts = {
            mode: 'cors' // CORSを有効にする
        };
		
		var pepole;
		var sum;

        fetch(apiUrl, opts)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
			
				
                return response.json();
            })
            .then(data => {
                // レスポンスを処理するコード
				pepole = data["pepole"];
				sum = data["sum"]
                console.log(pepole);
				console.log(sum);
				let sumpepole = document.getElementById("pepole");
				sumpepole.innerHTML = sum;
						for(let a = 0; a < 24; a ++){
				let name = "isu" + (a + 1);
				let id = document.getElementById(name);
				
				if(pepole[a] == 0){
					id.className = "seki";
				}else{
					id.className = "seki2";
				}
				
			}
            })
            .catch(error => {
                // エラー処理
                console.error('There was a problem with the fetch operation:', error);
            });
		
		function color() {
			
			fetch(apiUrl, opts)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
			
				
                return response.json();
            })
            .then(data => {
                // レスポンスを処理するコード
				pepole = data["pepole"];
				sum = data["sum"]
				let sumpepole = document.getElementById("pepole");
				sumpepole.innerHTML = sum;

        
			for(let a = 0; a < 26; a ++){
				let name = "isu" + (a + 1);
				let id = document.getElementById(name);
				if(pepole[a] == 0){
					id.className = "seki";
				}else{
					id.className = "seki2";
				}
				
			}
                console.log(pepole);
				console.log(sum);
            })
            .catch(error => {
                // エラー処理
                console.error('There was a problem with the fetch operation:', error);
            });
			
           	
        }