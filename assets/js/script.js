
new Vue({
	el: '#searchbox', 
	data: {
		keyword: []
	},
	methods: {
		getBadge: function(e){
			axios.get('http://so.badge.link/ajax.php?badge=' + this.keyword).then(response => {
					document.getElementById('badges').innerHTML = ''
					container = document.createElement("div");
					container.className = "badge-container"
				for (var i = response.data.length - 1; i >= 0; i--) {
					p = document.createElement("p"); 
					p.dataset.tag = response.data[i].name;
					p.setAttribute("onClick", "copyModal(this)");
					p.className = 'badge-wrapper';
					p.style.width = 100;
					p.innerHTML = response.data[i].src; 
					container.appendChild(p) 
				}

				document.getElementById('badges').appendChild(container);
			})
		}
	}
});

function copyModal(e){
	var el = document.querySelector('.modal'); 
	el.className = 'modal is-active'
	document.getElementById('copy-input').value = 
	"[![StackOverflow badge](http://so.badge.link/badges/" + e.dataset.tag + ".svg)](http://stackoverflow.com/questions/tagged/" + e.dataset.tag + ")";
}

function toggler(e){
	var el = document.querySelector('.modal'); 
	el.className = 'modal'
}
