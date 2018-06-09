var idDiv = 0;

	function Load()
	{
		var cookies = document.cookie.split(";");
		for (var i = 0; i < cookies.length; i++)
		{
			cookies[i] = cookies[i].trim();
			var el = cookies[i].split("=");
			if (el.length == 2)
				document.cookie = el[0] + "=; expires="+getDate(-1)+"; path=/";
		}
		for (var i = 0; i < cookies.length; i++)
		{
			cookies[i] = cookies[i].trim();
			var el = cookies[i].split("=");
			if (el.length == 2)
				Add(el[1]);
		}
	}


	function New()
	{
		var todo = prompt("New to do", "");
		if(todo != null && todo != NaN)
		{
			Add(todo);
		}
	}
	
	function Add(todo)
	{
		var node = $("#ft_list");
		var newDiv = document.createElement("div");
		var content = document.createTextNode(todo);
		newDiv.appendChild(content);
		newDiv.style.cursor ='pointer';
		newDiv.className = "todo";
		newDiv.id = 'listeelem'+idDiv;
		newDiv.onclick = function(){
				if(confirm("Are you sure ?"))
					Remove(newDiv.id);
			};
		node.prepend(newDiv);
		document.cookie = newDiv.id + "=" + todo + "; expires="+getDate(365)+"; path=/";
		idDiv++;
	}
	
	function getDate(days) {
		var date = new Date();
		date.setTime(date.getTime()+(days*24*60*60*1000));
		return date.toGMTString()
	}


	function Remove(id)
	{
		var content = $("#"+id).text();
		$("#"+id).remove();
		document.cookie = id + "=" + content + "; expires="+getDate(-1)+"; path=/";	
	}