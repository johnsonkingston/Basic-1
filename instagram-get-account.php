<html>
    <head>        
        <script src="dist/jquery-2.0.0.min.js"></script>
        <title>instagram-get-post</title>
 <style>
            ::-webkit-scrollbar {
                width: 0px;  /* Remove scrollbar space */
                background: transparent;  /* Optional: just make scrollbar invisible */
            }
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none}:focus{outline:0}ins{text-decoration:none}del{text-decoration:line-through}table{border-collapse:collapse;border-spacing:0}

	 
	 @font-face {
  font-family: 'JK-SLASH-Bold-Expanded-Outline';
  src: url('fonts/JK-SLASH-Bold-Expanded-Outline.eot?#iefix') format('embedded-opentype'),  url('fonts/JK-SLASH-Bold-Expanded-Outline.otf')  format('opentype'),
	     url('fonts/JK-SLASH-Bold-Expanded-Outline.woff') format('woff'), url('fonts/JK-SLASH-Bold-Expanded-Outline.ttf')  format('truetype'), url('fonts/JK-SLASH-Bold-Expanded-Outline.svg#NOW-Medium') format('svg');
  font-weight: normal;
  font-style: normal;
}
	 	 @font-face {
  font-family: 'JK-SLASH-Bold-Expanded';
  src: url('fonts/JK-SLASH-Bold-Expanded.eot?#iefix') format('embedded-opentype'),  url('fonts/JK-SLASH-Bold-Expanded.otf')  format('opentype'),
	     url('fonts/JK-SLASH-Bold-Expanded.woff') format('woff'), url('fonts/JK-SLASH-Bold-Expanded.ttf')  format('truetype'), url('fonts/JK-SLASH-Bold-Expanded.svg#NOW-Medium') format('svg');
  font-weight: normal;
  font-style: normal;
}

	 	 @font-face {
  font-family: 'JK-SLASH-Heavy-Expanded';
  src: url('fonts/JK-SLASH-Heavy-Expanded.eot?#iefix') format('embedded-opentype'),  url('fonts/JK-SLASH-Heavy-Expanded.otf')  format('opentype'),
	     url('fonts/JK-SLASH-Heavy-Expanded.woff') format('woff'), url('fonts/JK-SLASH-Heavy-Expanded.ttf')  format('truetype'), url('fonts/JK-SLASH-Heavy-Expanded.svg#NOW-Medium') format('svg');
  font-weight: normal;
  font-style: normal;
}
	 
	 	 @font-face {
  font-family: 'JK-SLASH-Corrupted';
  src: url('fonts/JK-SLASH-Corrupted.eot?#iefix') format('embedded-opentype'),  url('fonts/JK-SLASH-Corrupted.otf')  format('opentype'),
	     url('fonts/JK-SLASH-Corrupted.woff') format('woff'), url('fonts/JK-SLASH-Corrupted.ttf')  format('truetype'), url('fonts/JK-SLASH-Corrupted.svg#NOW-Medium') format('svg');
  font-weight: normal;
  font-style: normal;
}

	 	 	 @font-face {
  font-family: 'SFProText-Bold';
  src: url('fonts/SFProText-Bold.eot?#iefix') format('embedded-opentype'),  url('fonts/SFProText-Bold.otf')  format('opentype'),
	     url('fonts/SFProText-Bold.woff') format('woff'), url('fonts/SFProText-Bold.ttf')  format('truetype'), url('fonts/SFProText-Bold.svg#NOW-Medium') format('svg');
  font-weight: normal;
  font-style: normal;
}
	 
	 	 	 @font-face {
  font-family: 'SFProText-Black';
  src: url('fonts/SFProText-Black.eot?#iefix') format('embedded-opentype'),  url('fonts/SFProText-Black.otf')  format('opentype'),
	     url('fonts/SFProText-Black.woff') format('woff'), url('fonts/SFProText-Black.ttf')  format('truetype'), url('fonts/SFProText-Black.svg#NOW-Medium') format('svg');
  font-weight: normal;
  font-style: normal;
}

	 body{
		 font-family: 'SFProText-Bold';
		 font-style: normal;
	 }
            .item{
                width: 56vw;
                height: 90vh;
                position: fixed;
                top: 12vh;
                left: 38.5vw;
				text-transform: uppercase;
            }
            .img_container{
                background-size:contain;
                background-position: center;
                width:100%;
                height: 100%;
                background-repeat: no-repeat;
            }
            #message_wrap{
                position: fixed;
                left: 0;
                top:0;
                background-color: blue;
                color: white;
                font-family: sans-serif;
                padding:1vw;
                font-size: 0.7vw;
                width:31.4vw;
                height:calc(100vh - 1vw);
                overflow: scroll;
                z-index: 10000;
            }
	 
            #message_back{
                position: fixed;
                left: 0;
                top:auto;
                background-color: blue;
                color: white;
                font-family: sans-serif;
                padding:1vw;
                font-size: 0.7vw;
                width:31vw;
                height:calc(100vh - 2vw);
                overflow: scroll;
                z-index: 9999;
            
            }
	 		#header, #analyze_wrap, #calc_wrap, #processing_wrap{
		 		height: auto;
		 		border-bottom: 2px solid white;
		 		position: fixed;
		 		background-color: blue;
                color: white;
				top: 0;
				padding-top: 1vw;
                width:31vw;
                z-index: 10001;
                transition:all 1s linear;
	 }
     #analyze_wrap{
         width:31.3vw;
     }
	 #message{
		 padding-top: 98vh;
	 }
     #header{
        width: 31.4vw; 
         
     }	 	#analyze_wrap{
                left: 33.4vw;
				padding: 1vw;
				position: fixed;
				height: 5.5vw;
				overflow: visible;	
				border-left: 2px solid white;
                z-index: 10001;
            }
	 	 	#calc_wrap{
                left: calc(66.7vw);       
                right:0;
				padding: 1vw;
				position: fixed;
				height: 5.5vw;
				overflow: visible;
				border-left: 2px solid white;
                z-index: 10001;
                width: calc(31.3vw - 2px);
	 }
     #processing_wrap{
         width:34vw;
         left:100vw;
         overflow-y:scroll;
         z-index: 10004;
         height: 90vh;
		 padding-left: 1vw;
         padding-bottom: 10vh;
     }
     #processing_wrap img{
         width:32vw;
         height:auto;
		 margin-top: 1vw;
		 margin-bottom: 1vw;
     }
	 .processing{
		 font-family: 'JK-SLASH-Bold-Expanded-Outline';
		 font-size: 2.8vw;
		 line-height: 2.8vw;
		 letter-spacing: 0.3vw;
		 text-transform: uppercase;
		 border-top: 2px solid white;
		 padding-top: 0.7vw;
	 }
.colorResult{
         width: 31vw;
    	 height: 31vw;
    	 margin-top: 1vw;
    	 margin-bottom: 1vw;
    	 padding: 0.5vw;
     }
	 .header-two{
		     background-color: blue;
		 	 padding-bottom: 0.9vw;
	 }
            .colorswatch{
                height:2vw;
				top: 110px;
				left: 33vw;
                display: inline-block;
                margin-top: 1vw;
            }
            .frame{
                border:3px solid blue;
                background-color: transparent;
                position: absolute;
            }
            .object_frame{
                position: fixed;
                border:4px solid blue;
                background-color: transparent;
                transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                top:0;
                left: 0;
                width:0;
                height: 0;
                mix-blend-mode: hard-light;
           }
            .label{
                position: fixed;
                background-color: blue;
                color:white;
                padding:0.5vw;
                font-family: 'SFProText-Black';
		 		font-style: normal;
                font-size: 0.7vw;
                line-height: 0.5vw;
                letter-spacing: 0.1vw;
                text-transform: uppercase;
                transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                top: 0;
                left: 0;
                margin-top: -0.8vw;

            }
            #loadingbar{
                position: fixed;
                left:0;
                bottom: 0;
                height:0.5vw;
                background-color: blue;
                animation-name: loadinganimation;
                animation-iteration-count: infinite;
                animation-duration: 6s;
                animation-timing-function: linear;
                z-index: 10001;

            }
            @-webkit-keyframes loadinganimation {
                0%   {width:0vw;}
                50%  {width:100vw;}
                100% {width:0vw;}
            }
            .tweet{
                position: fixed;
                top:0;
                left: 0;
                padding:5px;
                font-family: 'SFProText-Black';
		 		font-style: normal;
                font-size: 0.7vw;
                line-height: 1vw;
				letter-spacing: 0.1vw;
                background-color: blue;
                color:white;
            }
            h1,h2{
                 display: block;
               margin-block-start: 0em;
               margin-block-end: 0em;
               margin-inline-start: 0px;
               margin-inline-end: 0px;
				font-family: 'JK-SLASH-Bold-Expanded-Outline';
               	font-weight: normal;   
				text-transform: uppercase;
				font-size: 2.8vw;
				line-height: 2.8vw;
				letter-spacing: 0.5vw;
                
            }
	 h3{
		 font-size: 1.4vw;
		 line-height: 1.4vw;
	 }
	 h4{
		       	font-family: 'SFProText-Black';
		 		font-style: normal;
                font-size: 0.7vw;
                line-height: 1vw;
				letter-spacing: 0.1vw;
		 		line-height: 1vw;
		 		text-transform: uppercase;
		 		margin: 0px;
		 		background-color: blue;
	 }
	 .username{
		 font-family: 'JK-SLASH-Heavy-Expanded';
		 letter-spacing: 0.5vw;
		 margin-bottom: 0.7vw;
	 }	
		 .no-outline{
		 font-family: 'JK-SLASH-Heavy-Expanded';
		 letter-spacing: 0.3vw;
		 border-top: 0px;
    	 padding-top: 0px;
	 } 
            .fullwidth{
                width:100%;
                height: auto;
            }
            #colorwrap{
                position: fixed;
                top: 7.7vw;
                left: 33.2vw;
                height:calc(100vh - 7.7vw);
                width: 5.5vw;
				z-index: 10000;
                overflow-y: scroll;
            }
            .color{
                width:100%;
            }
     .rightLikes{
         float: right;
         margin-right: 1vw;
     }
	 .left{
		 float: left;
	 }
	 .right{
		 float: right;
	 }
	 .stats{
		 float: left;
		 width: 33%;
		 margin-bottom: 0.7vw;
}
	 }
	 #objects-detected, #label-annotation, #face-detection, #text-analysis{
		 position: fixed;
    	 top: 7.5vw;	 
		 z-index: 100000;
	 }
	 mark{
		 background-color: blue;
		 color: white;
	 }
     .analysis-one,.analysis-two,.analysis-three,.analysis-four{
         transition:all 1s linear;
     }
	 .analysis-one {
    position: fixed;
    top: 7.7vw;
    left: 33.4vw;
}
	 .analysis-two {
        position: fixed;
        left: 43vw;
	   top: 7.7vw;
	   border-left: 2px solid white;
         height: calc(100vh - 7.7vw);
         overflow-y:scroll;
}
		.analysis-three {
    position: fixed;
    left: 53vw;
    width: 29vw;
	top: 7.7vw;
	border-left: 2px solid white;
} 
		 .analysis-four {
    position: fixed;
    left: 62vw;
    width: 29vw;
	top: 7.7vw;
	border-left: 2px solid white;
} 
	 .tagged-people{
		 background-color: white;
		 color: blue;		 
	 }
	 .hashtags, .percentage{
		 font-size: 0.7vw;
		 line-height: 0.7vw;
		 text-transform: uppercase;
		 font-family: 'SFProText-Black';
	 }
	 .percentage{
		 vertical-align: 0.3vw;
	 }
	 
	 #calculation{
    	width: 12vw;
    	top: 7.7vw;
    	position: fixed;
    	right: 0.8vw;
		overflow: visible;
        right: 0;
        max-height: calc(100vh - 7.7vw);
        overflow-y: scroll;
         border-left: 2px solid white;
	 }
	 #calc-face, #calc-likes, #calc-labels, #calc-objects{
		width: 100%;
		height: auto;
		background-color: bisque;
	 }
    #fullscreen{
         position: fixed;
         width:100vw;
         height: 100vh;
         text-align: center;
         font-family: 'JK-SLASH-Bold-Expanded-Outline';
         font-size: 6vw;
         line-height: 5vw;
     }
     #fullscreen_inner{
         margin-top: 20vw;
         text-transform: uppercase;
        letter-spacing: 1vw;
         color:blue;
     }
     
           .big{
          font-size: 14vw;
    line-height: 10vw;
    font-family: 'JK-SLASH-Corrupted';
      }
     
        </style>
    </head>
    <body>
        <div id="loadingbar"></div>
        <div id="colorwrap"></div>
        <?php
        $accountName = $_GET['accountName'];
        $url = 'json_user/'.$accountName.'.json';
        $json = file_get_contents($url);
        
        $path = 'Screenshots/'.$accountName;
        if(!is_dir($path)){
            mkdir($path);
        }
        
        $json = str_replace('<pre style="word-wrap: break-word; white-space: pre-wrap;">','',$json);
        $json = str_replace('</pre>','',$json);
        
        if (strpos($json, 'graphql') !== false) {

            
            
            
        
        
        //$result = simplexml_load_string($xml);
        //$json = json_encode($result);
        //$json = str_replace('@','',$json);
        
        $filename = fopen($url, "w") or die("Unable to open file!");
        fwrite($filename, $json);
        fclose($filename); 
        
        $obj = json_decode($json);
        
        $username = $obj->graphql->user->username;
        $full_name = $obj->graphql->user->full_name;
        $external_url = $obj->graphql->user->external_url;
        $biography = $obj->graphql->user->biography;
		$posts = $obj->graphql->user->edge_owner_to_timeline_media->{'count'}; 
		$followed = $obj->graphql->user->edge_followed_by->{'count'};
        $follow = $obj->graphql->user->edge_follow->{'count'};
        
          
        //include 'http://www.johnsonkingston.ch/INSTABOT/instagram_set_followers_json.php?accountName='.$accountName;
        
        
        $anzahl_items = 20;
        ?>
        <div id="message_back"></div>
        <div id="message_wrap">
			<div id="header"><h2  style="margin-bottom:0.7vw"><span class="no-outline">1</span> Get Instagram<br>posts by<span class="right">:</span><br><span class="username"><?php echo $username; ?></span></h2>
            <h3><?php echo $full_name; ?><br>
            <?php echo $biography; ?><br>
            <?php echo $external_url; ?></h3><br>
				<div class="stats"><h4>Posts:</h4><h2 class="left outline"><?php echo $posts; ?></h2></div><div class="stats"><h4>Followers:</h4><h2 class="left outline"><?php echo $followed; ?></h2></div><div class="stats"><h4>Follows:</h4><h2 class="no-outline"><?php echo $follow; ?></h2></div><br></div>
            <div id="message">
				
            </div>
		          
        </div>
		<div id="analyze_wrap">
				<div class="header-two"><h2><span class="no-outline">2</span> Analyse posts<span class="right">:</span><br><span class="right">Post &nbsp;<span class="no-outline" id="counterItems">1</span> / <?php echo $anzahl_items; ?></span></h2></div>
			<div id="objects-detected" class="analysis-one">
			</div>
			<div id="label-annotation" class="analysis-two">
			</div>
			<div id="face-detection" class="analysis-three">
			</div>
			<div id="text-analysis" class="analysis-four">
			</div>
				</div>
		<div id="calc_wrap">
			<div class="header-two"><h2><span class="no-outline">3</span> Calc profile<br>characteristics<span class="right">:</span></h2></div>
			
			<div id="calculation">
				<div id="calc-likes"><h4>LIKES:</h4></div>
				<div id="calc-objects"><h4><br>OBJECTS:</h4></div>
				<div id="calc-labels"><h4><br>LABELS:</h4></div>
				<div id="calc-face"><h4><br>EMOTIONS:</h4></div>
			</div>
		</div>
        
<script>
    var json_instagram;
    var status = 'downloading';
    var poststatus = 'empty';
    
    var objects_found = [];
    var blue, green, red;
    var json_google;
    var labels = [];
	var faces = [];
    
    var json_instagram_count;
    var accountName = '<?php echo $accountName; ?>';
    var calc_follower = '<?php echo $followed; ?>';
    host = '';
    
    var selectArray = [];
    
    var maxLikes = 0;
    var most_likes = 0;
    var least_likes = 100000000000;
    var total_likes = 0;
    var calc_objects = [];
    var calc_labels =[];
    var calc_emotions =[];
    
    
    $.getJSON("json_user/"+accountName+".json", function(json) {
        json_instagram = json.graphql.user.edge_owner_to_timeline_media.edges;
        json_instagram_count = json_instagram.length;
        if(json_instagram_count > 0){
            get_post(0);
        }else{
            $('#message').append('<h2>No posts!</h2>');
            setTimeout(function(){   
                status = "restart";
            }, 3000);
            
        }
    });
    
   $.post( "http://www.johnsonkingston.ch/INSTABOT/instagram_set_followers_json.php?accountName="+accountName, {  })
       .done(function( data ) {
       console.log(data);
   });
    
    
    
    function get_post(id){
        $.ajax({
            method: "POST",
            url: 'instagram-get-post-ajax.php?id='+id+'&accountName='+accountName
        }).success(function( msg ) {
            if(msg !== 'none' && msg.charAt(0) !== '<'){
                
                var tempArray = [];
                tempArray.push(['accountName',accountName]);
                
                
                
                json_img = JSON.parse(msg);
                url = json_instagram[id].node.thumbnail_src;
                ajax_url = "instagram-get-post-analyse.php?id="+id+"&url="+url;
                
                $.ajax({
                    method: "POST",
                    url: ajax_url
                }).success(function( msg ) {
                    
                    
                    $('body').append('<div id="item'+id+'" data-red="0" data-green="0" data-blue="0" style="z-index:'+id+'" class="item"><div class="img_container" style="background-image:url(images/'+id+'.jpg)"></div></div>');
                    $('#counterItems').html(id+1);

					setTimeout(function(){    
 
     
                    
                    if (json_instagram[id].node.hasOwnProperty('edge_liked_by')) {
                        var likes = json_instagram[id].node.edge_liked_by.count;
                    }else{
                        var likes = 'undefined'; 
                    }
                    if (json_instagram[id].node.hasOwnProperty('edge_media_to_caption')) {
                        if (json_instagram[id].node.edge_media_to_caption.edges.length > 0) {
                            var caption = json_instagram[id].node.edge_media_to_caption.edges[0].node.text;
                        }else{
                            var caption = 'no caption';
                        }
                    }else{
                        var caption = 'undefined';
                    }
                    
                    tempArray.push(['likes',likes]);
    
                        
                        
                    tempArray.push(['postContent',caption]);
                    
                    
                    

                        
                        
                    if (json_instagram[id].node.hasOwnProperty('taken_at_timestamp')) {
                        var timestamp = json_instagram[id].node.taken_at_timestamp;
                        var date = new Date(timestamp*1000);
                        var year = date.getFullYear();
                        var month = date.getMonth();
                        var date = date.getDate();
                    }else{
                        var year = 'undefined';
                        var month = 'undefined';
                        var date = 'undefined';
                    }
                    
					
                    $('h3').each(function(){ 
					  r = /[@]\w*/g; // @ with word symbols, global search
					  function f(x){
						return '<span class="tagged-people">'+x+'</span>'; 
					  }
					  h = $(this).html(); 
					  h = h.replace(r,f); 
					  $(this).html(h); 
					})
					
                    $('h3').each(function(){ 
					  r = /[#]\w*/g; // # with word symbols, global search
					  function f(x){
						return '<span class="hashtags">'+x+'</span>';
					  }
					  h = $(this).html();
					  h = h.replace(r,f);
					  $(this).html(h);
					})					
                    
                    $('#message').append('<hr>');
                    $('#message').append('<h4>'+date+'.'+month+'.'+year+' <span class="right">&#x2665;'+likes+'</span></h4>');
                    $('#message').append('<h3>'+caption+'</h3>');
                    
                    
                    
                    if(msg !== 'none' && msg.charAt(0) !== '<'){
                        json = JSON.parse(msg);
                        //console.log(json);
                        objects = json['objects'];
                        //console.log(objects);
                        
                        
                        $("<img/>",{
                            load : function(){
                                imageWidth = this.width;
                                imageHeight = this.height;
                                
                                windowHeight = $(window).height();
                                windowWidth = $(window).width()/3*2;
                                borderTop = windowHeight*0.12;
                                borderLeft = windowWidth*0.05;
                                
                                
                                blue = objects['imagePropertiesAnnotation'].dominantColors.colors[0].color.blue/255;
                                green = objects['imagePropertiesAnnotation'].dominantColors.colors[0].color.green/255;
                                red = objects['imagePropertiesAnnotation'].dominantColors.colors[0].color.red/255;
                                
                                
                                console.log(objects['imagePropertiesAnnotation'].dominantColors);
                                var size1 = 0.5;
                                var size2 = 0.7;
                                //var colorR = 0.2;
                                //var colorG = 0.6;
                                //var colorB = 0.7;
                                
                                
                                tempArray.push(['size1',size1]);
                                tempArray.push(['size2',size2]);
                                tempArray.push(['colorR',red]);
                                tempArray.push(['colorG',green]);
                                tempArray.push(['colorB',blue]);
                                
                                
                                
                                
                                var frameid = id-1;
                                
                                $('#item'+frameid).attr('data-red',red*255);
                                $('#item'+frameid).attr('data-green',green*255);
                                $('#item'+frameid).attr('data-blue',blue*255);
                                
                                
     								    
			//objects			
                                z = 0;		
                                if(objects.localizedObjectAnnotations){
                                    
                                    
                                    $('#objects-detected').append('<h4>Objects Detected:</h4>');
                                    
                                    while(objects['localizedObjectAnnotations'].length > z){
                                        
                                        frame = objects.localizedObjectAnnotations[z].boundingPoly.normalizedVertices;
                                        
                                        
                                        
                                        windowRatio = windowWidth/windowHeight;
                                        imageRatio = imageWidth/imageHeight;    
                                        
                                        if(windowRatio > imageRatio){
                                            // Hochformat
                                            skalierung = windowHeight*0.9/imageHeight;
                                            imageWidthNew = imageWidth*skalierung;
                                            imageHeightNew = imageHeight*skalierung;
                                            
                                            frameleft = (imageWidthNew*frame[0].x) + borderLeft + (windowWidth*0.5) + (((windowWidth*0.9)-imageWidthNew)/2);
                                            frametop = (frame[0].y*imageHeightNew) + borderTop;
                                            
                                            
                                        }else{
                                            // Querformat    
                                            skalierung = windowWidth*0.9/imageWidth;
                                            imageWidthNew = imageWidth*skalierung;
                                            imageHeightNew = imageHeight*skalierung;
                                            
                                            frameleft = (frame[0].x*imageWidthNew) + borderLeft + (windowWidth*0.5);
                                            frametop = (frame[0].y*imageHeightNew) + borderTop + (((windowHeight*0.9)-imageHeightNew)/2);
                                            
                                            
                                        }
                                        
                                        
                                        
                                        framewidth = (frame[1].x-frame[0].x)*imageWidthNew;
                                        frameheight = (frame[2].y-frame[0].y)*imageHeightNew; 
                                        
                                        
                                        
                                        $('body').append('<div class="object_frame" id="frame'+id+z+'" style="z-index:'+id+'"></div>');
                                        $('body').append('<div class="label" id="label'+id+z+'" style="z-index:'+id+'"><mark>'+objects.localizedObjectAnnotations[z].name+'</mark></div>');
                                        
                                        
                                        $('#frame'+id+z).css('top',frametop+'px');
                                        $('#frame'+id+z).css('left',frameleft+'px');
                                        $('#frame'+id+z).css('width',framewidth+'px');
                                        $('#frame'+id+z).css('height',frameheight+'px');
                                        
                                        $('#label'+id+z).css('top',frametop+frameheight+'px');
                                        $('#label'+id+z).css('left',frameleft+'px'); 
                                        
                                        
                                        $('#objects-detected').append('<h3><mark>'+objects.localizedObjectAnnotations[z].name+'<span class="percentage"> '+parseInt(objects.localizedObjectAnnotations[z].score*100)+'% </span></mark></h3>');
                                        
                                        
                                        if(calc_objects[objects.localizedObjectAnnotations[z].name]){
                                           calc_objects[objects.localizedObjectAnnotations[z].name] = calc_objects[objects.localizedObjectAnnotations[z].name]+1;
                                        }else{
                                           calc_objects[objects.localizedObjectAnnotations[z].name] = 1;
                                        }
                                        
                                        tempArray.push(['object'+(z+1),objects.localizedObjectAnnotations[z].name]);

                                        z++;
                                    } 
                                    
                                    
                                    
                                    var sortable = [];
                                    for (var vehicle in calc_objects) {
                                        sortable.push([vehicle, calc_objects[vehicle]]);
                                    }
                                    
                                    sortable.sort(function(a, b) {
                                        return b[1] - a[1];
                                    });
                                    
                                    calc_objects = [];
                                    
                                    var objSorted = {}
                                    sortable.forEach(function(item){
                                        calc_objects[item[0]]=item[1]
                                    });
                                    
                                    $('#calc-objects').html('<h4><br>OBJECTS:</h4>');
                                    
                                    for (var key in calc_objects) {
                                        if (calc_objects.hasOwnProperty(key)) {
                                            $('#calc-objects').append('<h4><mark>'+key+': '+calc_objects[key]+'</mark></h4>');
                                        }
                                    }
                                    

                                }
                                                           
                                
                                
                                
            /// LABELS                    
                                $('#label-annotation').append('<h4>Label Annotation:</h4>');
                                
                                var labelAnnotations = objects.labelAnnotations;
                                //console.log(labelAnnotations);
                                var labels_text = '';
                                a = 0;
                                while(labelAnnotations.length > a){
                                    $('#label-annotation').append('<h3><mark>'+labelAnnotations[a].description+'<span class="percentage"> '+parseInt(labelAnnotations[a].score*100)+'% </span></mark></h3>');
                                    labels_text += labelAnnotations[a].description+' ';
									
									//$('#calc-labels').append('<h4><mark>'+labelAnnotations[a].description+'</mark></h4>');
                                    labels_text += labelAnnotations[a].description+' ';
                                    
                                    if(calc_labels[labelAnnotations[a].description]){
                                        calc_labels[labelAnnotations[a].description] = calc_labels[labelAnnotations[a].description]+1;
                                    }else{
                                        calc_labels[labelAnnotations[a].description] = 1;
                                    }
                                        
                                   
                                    
                                    tempArray.push(['object'+(a+1+z),labelAnnotations[a].description]);

                                    a++;
                                }
                                
                                
                                
                                var sortable = [];
                                for (var vehicle in calc_labels) {
                                    sortable.push([vehicle, calc_labels[vehicle]]);
                                }
                                
                                sortable.sort(function(a, b) {
                                    return b[1] - a[1];
                                });
                                
                                calc_labels = [];
                                
                                var objSorted = {}
                                sortable.forEach(function(item){
                                    calc_labels[item[0]]=item[1]
                                })
                                
                                
                                $('#calc-labels').html('<h4><br>LABELS:</h4>');
                                
                                
                                                        
                                for (var key in calc_labels) {
                                    if (calc_labels.hasOwnProperty(key)) {
                                        $('#calc-labels').append('<h4><mark>'+key+': '+calc_labels[key]+'</mark></h4>');
                                    }
                                }
                                
                                
                                if(labels_text !== ''){
                                    labels[id-1] = labels_text;
                                }else{
                                    labels[id-1] = ' ';
                                }
              //Colorwrap         
                                
                                $('#colorwrap').append('<div class="color" style="height:5.5vw;"></div>');
                                c = 0;
                                while(objects['imagePropertiesAnnotation'].dominantColors.colors.length > c){
                                    blue = objects['imagePropertiesAnnotation'].dominantColors.colors[c].color.blue;
                                    green = objects['imagePropertiesAnnotation'].dominantColors.colors[c].color.green;
                                    red = objects['imagePropertiesAnnotation'].dominantColors.colors[c].color.red;
                                    score = objects['imagePropertiesAnnotation'].dominantColors.colors[c].score*$(window).height()*0.90;
                                    $('#colorwrap').append('<div class="color" style="background-color:rgb('+red+','+green+','+blue+');height:'+score+'px;"></div>');
                                    c++;
                                }
                                
                                
                                
                                
             //face Detection                                 
                                $('#face-detection').append('<h4>face detection:</h4>');
                                
                                if (objects.faceAnnotations){
                                    
                                    var faceAnnotations = objects.faceAnnotations;
                                    //console.log(faceAnnotations);
                                    var faces_text = '';
                                    f = 0;
                                    while(faceAnnotations.length > f){
                                        joy = faceAnnotations[f].joyLikelihood;
                                        sorrow = faceAnnotations[f].sorrowLikelihood;
                                        anger = faceAnnotations[f].angerLikelihood;
                                        surprise = faceAnnotations[f].surpriseLikelihood;
                                        if(joy == 'LIKELY'){
                                            joy = 'Joy spotted';
                                        }
                                        else if(joy == 'VERY_LIKELY'){
                                            joy = 'Lots of joy spotted';
                                        }	
                                        else if(joy == 'POSSIBLE'){
                                            joy = 'Maybe joyful?';
                                        }		
                                        else{
                                            joy = ' ';
                                        }
                                        
                                        if(calc_emotions[joy]){
                                            calc_emotions[joy] = calc_emotions[joy]+1;
                                        }else{
                                            calc_emotions[joy] = 1;
                                        }
                                        
                                        
                                        if(sorrow == 'LIKELY'){
                                            sorrow = 'Sorrow spotted';
                                        }
                                        else if(sorrow == 'VERY_LIKELY'){
                                            sorrow = 'Lots of sorrow spotted';
                                        }	
                                        else if(sorrow == 'POSSIBLE'){
                                            sorrow = 'Maybe sorrowful?';
                                        }		
                                        else{
                                            sorrow = ' ';
                                        }
                                        
                                        if(anger == 'LIKELY'){
                                            anger = 'Anger spotted';
                                        }
                                        else if(anger == 'VERY_LIKELY'){
                                            anger = 'Lots of anger spotted';
                                        }	
                                        else if(anger == 'POSSIBLE'){
                                            anger = 'Maybe angry?';
                                        }		
                                        else{
                                            anger = ' ';
                                        }
                                        
                                        if(surprise == 'LIKELY'){
                                            surprise = 'Surprise spotted';
                                        }
                                        else if(surprise == 'VERY_LIKELY'){
                                            surprise = 'Lots of surprise spotted';
                                        }	
                                        else if(surprise == 'POSSIBLE'){
                                            surprise = 'Maybe surprised?';
                                        }		
                                        else{
                                            surprise = ' ';
                                        }	
                                        $('#face-detection').append('<h3><mark>'+joy+'<br>'+sorrow+'<br>'+anger+'<br>'+surprise+'</mark></h3>');
                                        faces_text += faceAnnotations[f].angerLikelihood+' ';
                                        
                                        f++;	
                                    }
                                    
                                    var sortable = [];
                                    for (var vehicle in calc_emotions) {
                                        sortable.push([vehicle, calc_emotions[vehicle]]);
                                    }
                                    
                                    sortable.sort(function(a, b) {
                                        return b[1] - a[1];
                                    });
                                    
                                    calc_emotions = [];
                                    
                                    var objSorted = {}
                                    sortable.forEach(function(item){
                                        calc_emotions[item[0]]=item[1]
                                    });
                                    
                                    $('#calc-face').html('<h4><br>EMOTIONS:</h4>');
                                    
                                    for (var key in calc_emotions) {
                                        if (calc_emotions.hasOwnProperty(key)) {
                                            $('#calc-face').append('<h4><mark>'+key+': '+calc_emotions[key]+'</mark></h4>');
                                        }
                                    }
                                    
								}	
                                
                                if(faces_text !== ''){
                                    faces[id-1] = faces_text;
                                }else{
                                    faces[id-1] = ' ';
                                }	
								
			//calculation		
                                
								//var likes = json_instagram[id-1].node.edge_liked_by.count;
								//var likes_new = json_instagram[id].node.edge_liked_by.count;
                                if(likes > most_likes){
                                    most_likes = likes;  
                                }
                                if(likes < least_likes){
                                    least_likes = likes;   
                                }
								
                                total_likes += likes;
                                average_likes = Math.round(total_likes/(id));
                                
                                //console.log(id+' : '+average_likes);
								
								//console.log(likes_new, most_likes, least_likes, average_likes);
								$('#calc-likes').html('<h4>Likes:</h4><h4>Most:<span class="rightLikes">&#x2665;'+most_likes+'</span><br>Least:<span class="rightLikes">&#x2665;'+least_likes+'</span><br>Average:<span class="rightLikes">&#x2665;'+average_likes+'</span>');
						

                                
                                
                                
                                if(objects.fullTextAnnotation){
                                    $('#text-analysis').append('<h4>Text Analysis</h4>');
                                    $('#text-analysis').append('<h3><mark>'+objects.fullTextAnnotation.text+'</mark></h3>');
                                    
                                }
                                
                                selectArray.push(tempArray);
                                
                            },
                            src  : 'images/'+id+'.jpg'
                        });
                        
                        
                    }   
                    //console.log('calc_objects: ');
                    //console.log(calc_objects);                   
                    
                    scrolltobottom(id);
                    
                    
                    
                    id++;
                        if(id < <?php echo $anzahl_items; ?> && id < json_instagram_count){
                            get_post(id);   
                        }else{
                
 
                    
                setTimeout(function(){    
                    $('.item').hide();
                    $('.object_frame').hide();
                    $('#colorwrap').hide();
                    $('.label').hide();

                    scrolltobottom(id);
                    

                    choosePost();   
                    
                    blurImage(maxLikes,accountName);
                    
                }, 3000);    
                    
                    
                
            }  }, 1000);        
        });
    }
    
    });
    }
    
    
    function choosePost(){
        console.log(selectArray);
        
        inSelection = selectArray.length;
        counterSelection = 0;
        
        var delta = 100000;
        var selectedPost;
        
        while(counterSelection < inSelection){
            var newDelta = Math.abs(selectArray[counterSelection][1][1]-average_likes);
            
            
            if(newDelta < delta){
                selectedPost = counterSelection;
                delta = newDelta;
            } 
            counterSelection++; 
        }
        
        var resultArray = [];
        
        resultArray[0] = ["accountName",accountName];
        resultArray[1] = ["postContent",selectArray[selectedPost][2][1]];
        
        var size1 = most_likes/calc_follower;
        var size2 = calc_follower/10000;
            
        resultArray[2] = ["size1",size1]; //size1
        resultArray[3] = ["size2",size2]; //size2
        
        var selectedR = selectArray[selectedPost][5][1];
        var selectedG = selectArray[selectedPost][6][1];
        var selectedB = selectArray[selectedPost][7][1];
        
        resultArray[4] = ["colorR",selectArray[selectedPost][5][1]]; //R
        resultArray[5] = ["colorG",selectArray[selectedPost][6][1]]; //G
        resultArray[6] = ["colorB",selectArray[selectedPost][7][1]]; //B
        
        resultArray[7] = ["object1",selectArray[selectedPost][8][1]];
        
        if(selectArray[selectedPost][9]){
           resultArray[8] = ["object2",selectArray[selectedPost][9][1]];
           } else{
           resultArray[8] = ["object2",""];
           }
        if(selectArray[selectedPost][10]){
        resultArray[9] = ["object3",selectArray[selectedPost][10][1]];
        }else{
           resultArray[9] = ["object3",""];
        }
        
        
        
      // var labelSelectArray = [];
      // var labelCounter = 8;
      // while(labelCounter < 11){
      //     
      //    labelToCheck = selectArray[selectedPost][labelCounter][1];
      //    console.log(labelToCheck);
      //    console.log(calc_labels[labelToCheck]);
      //    if(labelToCheck !== ''){
      //       
      //    
      //    if(calc_labels[labelToCheck] == 1){
      //        labelSelectArray.push(labelToCheck);
      //    }
      //    }
      //     labelCounter++;   
      // }
      // 
      // labelCounter = 0;
      // resultArrayCount = 7;
      // while(labelCounter < labelSelectArray.length){
      //     resultArray[resultArrayCount] = ["object"+(labelCounter+1),labelSelectArray[labelCounter]]; 
      //     console.log(labelSelectArray[labelCounter]);
      //     
      //     labelCounter++;
      //     resultArrayCount++;
      // }
        

        
        saveChosenJson(resultArray);

        console.log('resultArray');  
        console.log(resultArray);  
        
        $('body').append('<div id="processing_wrap"><div</div>');
        
        setTimeout(function(){ 
        $('#colorwrap').hide();
        $('#message_back').css('left','-33vw');
        $('#message_wrap').css('left','-34vw');
        $('#analyze_wrap').css('left','0');
        $('#calc_wrap').css('left','33.2vw');
        $('#calc_wrap').css('width','31.5vw');
        $('#processing_wrap').css('left','66.9vw');
            
        $('.analysis-one').css('left','0');
        $('.analysis-two').css('left','13vw');
        $('.analysis-three').css('left','20vw');
        $('.analysis-four').css('left','39vw');
            
            
         size1Rounded = Math.round(size1*10000)/100;  
         size2Rounded = Math.round(size2*10000)/100; 
			
         selectedRRounded = parseInt(selectedR*255);  
         selectedGRounded = parseInt(selectedG*255); 			
         selectedBRounded = parseInt(selectedB*255); 			
            
        
        $('#processing_wrap').append('<div class="header-two"><h2><span class="no-outline">4</span> Processing<br>Profile Data<span class="right">:</span></h2></div>');
						
setTimeout(function(){
        $('#processing_wrap').append('<div><h3 class="processing"><span class="left no-outline">4.1&nbsp;</span> Choosing post</h3><h3 class="processing no-outline">with amount<br>of likes closest to average of <span style=font-family:"SFProText-Bold">&#x2665;</span>'+average_likes+'</h3></div>');
    scrolltobottom_processing();
setTimeout(function(){   
       $('#processing_wrap').append('<img src="images/'+selectedPost+'.jpg">');
     scrolltobottom_processing();
setTimeout(function(){   
        $('#processing_wrap').append('<div><h3 class="processing"><span class="left no-outline">4.2&nbsp;</span> Choosing<br>color for avatar</h3><h3 class="processing no-outline">according to dominant color<br>in post</h3></div>');
    scrolltobottom_processing();
setTimeout(function(){   
        $('#processing_wrap').append('<h3 style="margin-top:0.7vw">RGB('+selectedRRounded+' / '+selectedGRounded+' / '+selectedBRounded+')</h3><div class="colorResult" style="background-color:rgb('+selectedR*255+','+selectedG*255+','+selectedB*255+');"></div> ');
    scrolltobottom_processing();
setTimeout(function(){   
     $('#processing_wrap').append('<div><h3 class="processing"><span class="left no-outline">4.3&nbsp;</span> Defining size<br> of avatar</h3><h3 class="processing no-outline">according to relation between likes and followers</h3></div>');
    scrolltobottom_processing();
setTimeout(function(){   
    $('#processing_wrap').append('<div><h3 style="margin-top:0.5vw">Layer 1: '+size1Rounded+'% </h3></div>');
        $('#processing_wrap').append('<div><h3 style="margin-bottom:0.7vw">Layer 2: '+size2Rounded+'% </h3></div>');
    scrolltobottom_processing();
setTimeout(function(){   
        $('#processing_wrap').append('<div><h3 class="processing"><span class="left no-outline">4.4&nbsp;</span> Selecting<br>3D-objects</h3><h3 class="processing no-outline">according to profile specific labels</h3></div>');
    scrolltobottom_processing();
setTimeout(function(){   
        $('#processing_wrap').append('<div><h3 style="margin-top:0.5vw">'+resultArray[7][1]+'</h3></div>');
        if(resultArray[8]){ $('#processing_wrap').append('<div><h3>'+resultArray[8][1]+'</h3></div>'); }
        if(resultArray[8]){ $('#processing_wrap').append('<div><h3 style="margin-bottom:0.7vw">'+resultArray[9][1]+'</h3></div>'); }
    scrolltobottom_processing();
setTimeout(function(){   
        $('#processing_wrap').append('<div><h3 class="processing"><span class="left no-outline">4.5&nbsp;</span> Defining<br>mood</h2><h3 class="processing no-outline">according to face detection</h3></div>');
    scrolltobottom_processing();
setTimeout(function(){   
        $('#processing_wrap').append('<div><h3 style="margin-top:0.5vw;margin-bottom:0.7vw">'+calc_emotions[0]+'</h3></div>');
setTimeout(function(){   
    
    fullscreen('<div class="big">GENERATING</div><div class="big">AVATAR/POST</div>');
    
}, 2000);        
}, 2000);        
}, 2000);        
}, 2000);        
}, 2000);        
}, 2000);        
}, 2000);        
}, 2000);        
}, 2000);        
}, 2000);        
}, 2000);        
}, 500);
        
    }
    

    
    function scrolltobottom(id){
        
        $('#message_wrap').animate({ scrollTop: $('#message').height() }, 1000);
        $('.analysis-two').animate({ scrollTop: $('.analysis-two').innerHeight() }, 1000);
        $('#colorwrap').animate({ scrollTop: $(window).height()*id }, 1000);
    }
    
    
      function scrolltobottom_processing(){
        
        $('#processing_wrap').animate({ scrollTop: parseInt($('#processing_wrap').scrollTop())+ $(window).height()/3 }, 1000);
    }  
    
    function fullscreen(text){
        $('body').html('');
        $('body').append('<div id="fullscreen"><div id="fullscreen_inner">'+text+'</div></div>');
        setTimeout(function(){   
            status = 'downlaodFinished';
        },15000);

    }
    
    function fullscreenGeneral(text){
        $('body').html('');
        $('body').append('<div id="fullscreen"><div id="fullscreen_inner">'+text+'</div></div>');    
    }
    
    
    function saveChosenJson(data){
        dataSerialize = JSON.stringify(data);
        
        $.post( "instagram_save_chosen.php", { data })
            .done(function( data ) {
        });
        
        
    }
    
    
    
    
    function blurImage(id,accountName){
       
       ajax_url = "imageintervention-blur.php?image="+id+"&accountName="+accountName;
       $.ajax({
           method: "POST",
           url: ajax_url
       }).success(function( msg ) {

       });
       
   }    
    
    
    
    function getJson(id){
        $.getJSON("google_json/google_actual.json", function(json) {
            json_google = json.responses[0];
            //console.log('json_google:');
            //console.log(json_google);
        }); 
        
    }
    
</script>
        
        <?php }else{
            echo '<script>var status = "restart";$("#loadingbar").hide();</script>';
            
        } ?>
    </body>
</html>