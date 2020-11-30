//Advent Calendar
function updatePage(){
    setContent();
    document.getElementById("dailyReading").innerHTML = reading;
    document.getElementById("dailyNotes").innerHTML = notes;
}
function setContent(){
    let d = new Date();
    let todaysDate = d.getDate();
    switch (todaysDate){
        case 1: {
            reading = "Read Psalm 23:1-6"; 
            notes = '';
            break;
        }
        case 2: {
            reading = "Read Matthew 8:23-27"; 
            notes = '';
            break;
        }
        case 3: {
            reading = "Read Romans 8:31-39"; 
            notes = '';
            break;
        }
        case 4: {
            reading = "Read 1 Samuel 2:1-10";
            notes = '';
            break;
        }
        case 5: {
            reading = "Read 1 Samuel 17:1-58";
            notes = '';
            break;
        }
        case 6: {
            reading = "Read 2 Timothy 2:11-13"; 
            notes = '';
            break;
        }
        case 7: {
            reading = "Read Matthew 3:13-16";
            notes = '';
            break;
        }
        case 8: {
            reading = "Read Acts 1:1-11";
            notes = '';
            break;
        }
        case 9: {
            reading = "Read Mark 15:33-41";
            notes = '';
            break;
        }
        case 10: {
            reading = "Read John 3:16-18"; 
            notes = '';
            break;
        }
        case 11: {
            reading = "Read Isaiah 53:1-9";
            notes = '';
            break;
        }
        case 12: {
            reading = "Read Acts 8:26-40";
            notes = '';
            break;
        }
        case 13: {
            reading = "Read Isaiah 40:28-31";
            notes = '';
            break;
        }
        case 14: {
            reading = "Read Luke 12:22-24";
            notes = '';
            break;
        }
        case 15: {
            reading = "Read Genesis 1:1-31";
            notes = '';
            break;
        }
        case 16: {
            reading = "Read Acts 2:14-40";
            notes = '';
            break;
        }
        case 17: {
            reading = "Matthew 13:1-23";
            notes = '';
            break;
        }
        case 18: {
            reading = "Read Psalm 51:1-12";
            notes = '';
            break;
        }
        case 19: {
            reading = "Read Matthew 5:13-16";
            notes = '';
            break;
        }
        case 20: {
            reading = "Read Psalm 16:5-11";
            notes = '';
            break;
        }
        case 21: {
            reading = "Read Luke 24:1-12";
            notes = '';
            break;
        }
        case 22: {
            reading = "Read Proverbs 10:1-32";
            notes = '';
            break;
        }
        case 23: {
            reading = "Read Philippians 4:4-20";
            notes = '';
            break;
        }
        case 24: {
            reading = "Read Luke 2:1-21";
            notes = '';
            break;
        }
        case 25: {
            reading = "MERRY CHRISTMAS"; 
            notes = "And a Happy New Year"
            break;
        }
        default: {
            reading = "Advent Calendar Begins Tomorrow"; 
            notes = ""
            break;
        }
    }
}