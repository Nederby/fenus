var feedReader = new Class({
	/**
	* constructor
	*/    
	initialize: function(url) {
		this.url = url;
		//console.log("trying to open feed url: "+url);
	}
});

var XmlFeedReader = new Class({
	Extends:feedReader,
	/**
	Fetch a XMl feed
	@return void
	*/
	fetch: function (){
		console.log("trying to fetch feed url: "+this.url);
	}
});

var JsonFeedReader = new Class({
	Extends:feedReader,
	
	/**
	Fetch a Json feed
	@return void
	*/
	fetch: function (){
		//console.log("trying to fetch feed url: "+this.url);
		var request = new Request.JSON({
			url: this.url,

			onRequest: function(){
				document.id('topNews').set('html', '<img style="position: absolute;top: 50%;margin-top: -20px;left: 45%;margin-left: -20px;" src="img/ajax-loader.gif" />');
			},
			onSuccess: function(json){
				var topNewsDate = json.top;
				var latestNewsDate = json.latest;
				
				//foreach top news
				topNewsDate.each(function(item, index){
					var link = topNewsDate[index]['link'];
					var arr_link = link.split("/");

					topNewsDate[index]['category'] = arr_link[4];
					
					var smartDate = new SmartDate(topNewsDate[index]['pubDate']);
					topNewsDate[index]['humanDate'] = smartDate.humanTime();							
				});
				
				latestNewsDate.each(function(item, index){
					var link = latestNewsDate[index]['link'];
					var arr_link = link.split("/");
					
					latestNewsDate[index]['category'] = arr_link[4];
					
					var smartDate = new SmartDate(latestNewsDate[index]['pubDate']);
					latestNewsDate[index]['humanDate'] = smartDate.humanTime();					
				});
				
				//header data
				var today = new Date();
				var curr_date = today.getDate();
				var curr_month = today.getMonth() + 1; //Fix months are zero based
				var curr_year = today.getFullYear();
				var curr_hour = today.getHours();
				var curr_min = today.getMinutes();
				if (curr_min.toString().length == 1){curr_min = "0" + curr_min;}//hack for adding zero prefix in js min

				var humanDateToday = curr_date+"-"+curr_month+"-"+curr_year+" "+curr_hour+":"+curr_min
				var headerData = {FeedUpdateDate: humanDateToday, humanFeedUpdateDate: humanDateToday, feedType :"Json"}
				
				//setting the top news
				var topNewsSource = document.getElementById("template-topNews").textContent;
				var topNewsTemplate = Handlebars.compile(topNewsSource);
				var topNewsHTML = topNewsTemplate({ topNews : topNewsDate });
				
				//setting the latest news
				var latestNewsSource = document.getElementById("template-latestNews").textContent;
				var latestNewsTemplate = Handlebars.compile(latestNewsSource);
				var latestNewsHTML = latestNewsTemplate({ latestNews : latestNewsDate });
				
				//setting the header
				var headerSource = document.getElementById("template-header").textContent;
				var headerTemplate = Handlebars.compile(headerSource);
				var headerHTML = headerTemplate({ header : headerData });
				
				document.id('header').set('html', headerHTML);
				document.id('topNews').set('html', topNewsHTML);
				document.id('latestNews').set('html', latestNewsHTML);
			},
			onComplete: function(jsonObj) {
				//needs to remove the ajax loader
				//console.log("all done :)");
			}

		}).send();
	}
	
});

var SmartDate = new Class({
	Extends:Date,
	/**
	* constructor
	* @param string $date_string Datetime string or Unix timestamp
	*/    
	initialize: function(dateString) {
		this.date = new Date(dateString);
	},
	/**
	* @return a human friendly time string
	* @param a unix time stamp (int)
	*/
	humanTime: function() {
		var ret = "";
		var dateTime = this.date;
		var min = dateTime.getMinutes();
		if (min.toString().length == 1){
			min = "0" + min;//hack for adding zero prefix in js min
		}
		
		if (this.isToday()) {
			ret = "I dag, kl. "+dateTime.getHours() +":"+ min;
		} else if (this.wasYesterday()) {
			ret = "I g\u00e5r, kl. "+dateTime.getHours() +":"+ min;
		} else {
			ret = dateTime.getDate()+"-"+(dateTime.getMonth()+1)+"-"+dateTime.getFullYear()+" kl. "+dateTime.getHours() +":"+ min;
		}
		return ret;
	},
	/**
	 * Returns true if given datetime string is today.
	 * @return boolean True if datetime string is today
	 */
	isToday: function (){
		return this.date.toLocaleDateString() == new Date().toLocaleDateString();
	},
	
	/**
	 * Returns true if given datetime string was yesterday.
	 * @return boolean True if datetime string was yesterday
	 */
	wasYesterday: function (){
		var yesterday = new Date(new Date().setDate(new Date().getDate()-1))
		return this.date.toLocaleDateString() == yesterday.toLocaleDateString();
	},
	
});
