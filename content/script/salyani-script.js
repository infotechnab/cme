 function calculate()
            {
             
           
            //this is set of list of month ranging from 2000- 2090
            var shows = {                 
                2000:[ 0, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31 ],
                2001:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2002:[ 0, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30 ],
                2003:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2004:[ 0, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31 ],
                2005:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2006:[ 0, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30 ],
                2007:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2008:[ 0, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31 ],
                2009:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2010:[ 0, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30 ],
                2011:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2012:[ 0, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30 ],
                2013:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2014:[ 0, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30 ],
                2015:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2016:[ 0, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30 ],
                2017:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2018:[ 0, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30 ],
                2019:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31 ],
                2020:[ 0, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2021:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2022:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30 ],
                2023:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31 ],
                2024:[ 0, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2025:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2026:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2027:[ 0, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31 ],
                2028:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2029:[ 0, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30 ],
                2030:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2031:[ 0, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31 ],
                2032:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2033:[ 0, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30 ],
                2034:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2035:[ 0, 30, 32, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31 ],
                2036:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2037:[ 0, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30 ],
                2038:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2039:[ 0, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30 ],
                2040:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2041:[ 0, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30 ],
                2042:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2043:[ 0, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30 ],
                2044:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2045:[ 0, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30 ],
                2046:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2047:[ 0, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2048:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2049:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30 ],
                2050:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31 ],
                2051:[ 0, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2052:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2053:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30 ],
                2054:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31 ],
                2055:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2056:[ 0, 31, 31, 32, 31, 32, 30, 30, 29, 30, 29, 30, 30 ],
                2057:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2058:[ 0, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31 ],
                2059:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2060:[ 0, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30 ],
                2061:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2062:[ 0, 31, 31, 31, 32, 31, 31, 29, 30, 29, 30, 29, 31 ],
                2063:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2064:[ 0, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30 ],
                2065:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2066:[ 0, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 29, 31 ],
                2067:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2068:[ 0, 31, 31, 32, 32, 31, 30, 30, 29, 30, 29, 30, 30 ],
                2069:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2070:[ 0, 31, 31, 31, 32, 31, 31, 29, 30, 30, 29, 30, 30 ],
                2071:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2072:[ 0, 31, 32, 31, 32, 31, 30, 30, 29, 30, 29, 30, 30 ],
                2073:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 31 ],
                2074:[ 0, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2075:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2076:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30 ],
                2077:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 30, 29, 31 ],
                2078:[ 0, 31, 31, 31, 32, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2079:[ 0, 31, 31, 32, 31, 31, 31, 30, 29, 30, 29, 30, 30 ],
                2080:[ 0, 31, 32, 31, 32, 31, 30, 30, 30, 29, 29, 30, 30 ],
                2081:[ 0, 31, 31, 32, 32, 31, 30, 30, 30, 29, 30, 30, 30 ],
                2082:[ 0, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30 ],
                2083:[ 0, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30 ],
                2084:[ 0, 31, 31, 32, 31, 31, 30, 30, 30, 29, 30, 30, 30 ],
                2085:[ 0, 31, 32, 31, 32, 30, 31, 30, 30, 29, 30, 30, 30 ],
                2086:[ 0, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30 ],
                2087:[ 0, 31, 31, 32, 31, 31, 31, 30, 30, 29, 30, 30, 30 ],
                2088:[ 0, 30, 31, 32, 32, 30, 31, 30, 30, 29, 30, 30, 30 ],
                2089:[ 0, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30 ],
                2090:[ 0, 30, 32, 31, 32, 31, 30, 30, 30, 29, 30, 30, 30 ]       };
             
            // initialization of parameter 
            //Equivalent  Nepali Date 
            var startingNepYear = 2000;
            var startingNepMonth = 1;
            var startingNepDay = 1;
            var dayOfWeek = "WEDNESDAY";
     
            // Least Posible English date initialization
            var startingEngYear = 1943;
            var startingEngMonth = 4;
            var startingEngDay = 14;
    
            //Custome date  Nepali to convert into English
            var nepYear = document.getElementById("yearInput").value;
            var nepMonth = document.getElementById("monthInput").value;
            var nepDay = document.getElementById("dayInput").value;
         
    
            var totalInYear = 0;  
            //function to calculate 
           
            var nepYear = document.getElementById("yearInput").value;
            var nepMonth = document.getElementById("monthInput").value;
            var nepDay = document.getElementById("dayInput").value;
                $.each(shows, function(key, value)
                {
                    $.each(value,function(newkey, newvalue)
                    {                    
                        totalInYear += parseInt(newvalue)                   
                    })      
                    if(key==nepYear-1)
                    {                     
                        return false;
                    }   
                }
            );
                //document.writeln("Total Days in Year:"+totalInYear+"</br>");
            
                // lets calculate days in month
                var totalInMonth = 0;
                $.each(shows[nepYear], function(keyMonth, valueMonth)
                {
                    totalInMonth += parseInt(valueMonth);                
                    //document.writeln(valueMonth+"<br/>");
                    if(keyMonth == nepMonth - 1)
                    {
                        //alert(key);
                        return false;
                    }                
                });            
               // document.writeln("Total Days in Months: "+totalInMonth+"<br/>");  
            
                //lets calculate total days 
                var totalInDay= nepDay- startingNepDay;
                //document.writeln("Total days:"+totalInDay+"<br/>");
                var totaln=0;
                totaln = parseInt(totalInYear) + parseInt(totalInMonth) + parseInt(totalInDay);
                //document.writeln("Total:"+totaln);
                //convertit(totaln);
                 
            moment().format();
            moment(Date);
            var convertedDate = moment("1943-4-14", "YYYY-MM-DD");
            convertedDate = convertedDate.add('days',totaln);
            //var now = moment(startingEngYear, startingEngMonth,startingEngDay);
            //return convertedDate;
            var xyz = convertedDate.get('year');
			var mymonth = convertedDate.get('month');
			var mymonth = mymonth+1;
                        
                        var mydate = convertedDate.get('date');
                        var passeddata =  document.getElementById("datapass").value;
                        var ydate = passeddata+"_y";
                        var mdate = passeddata+"_m";
                        var ddate = passeddata+"_d";
                       
                         document.getElementById(ydate).value=xyz;
			document.getElementById(mdate).value=mymonth;
			document.getElementById(ddate).value=mydate;
            //document.getElementById("cdate").value=convertedDate;

            }
            
        
            
            //calculate();
       