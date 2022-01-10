* {
	            box-sizing: border-box;
            }
            body {
	            font-family: 'Montserrat', sans-serif;
	            line-height: 1.6;
	            margin: 0;
	            min-height: 100vh;
            }
            ul {
              margin: 0;
              padding: 0;
              list-style: none;
            }


            h2,
            h3,
            a {
	            color: #34495e;
            }

            a {
	            text-decoration: none;
            }



            .logo {
	            margin: 0;
	            font-size: 1.45em;
            }
            .logo:hover{
                text-decoration: none;
}

            .main-nav {
	            margin-top: 5px;

            }
            .logo a,
            .main-nav a {
	            padding: 10px 15px;
	            text-transform: uppercase;
	            text-align: center;
	            display: block;
            }

            .logo a:hover{
                text-decoration:none;
                color:#1E90FF;
}

            .main-nav a {
	            color: #34495e;
	            font-size: .99em;
            }

            .main-nav a:hover {
	            color: #718daa;
            }



            .header {
	            padding-top: .5em;
	            padding-bottom: .5em;
	            border: 1px solid #a2a2a2;
	            background-color: #f4f4f4;
	            -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	            -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	            box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.75);
	            -webkit-border-radius: 5px;
	            -moz-border-radius: 5px;
	            border-radius: 5px;
            }


            /* ================================= 
              Media Queries
            ==================================== */




            @media (min-width: 769px) {
	            .header,
	            .main-nav {
		            display: flex;
	            }
	            .header {
		            flex-direction: column;
		            align-items: center;
                	.header{
		            width: 80%;
		            margin: 0 auto;
		            max-width: 1150px;
	            }
	            }

            }

            @media (min-width: 1025px) {
	            .header {
		            flex-direction: row;
		            justify-content: space-between;
	            }

            }

.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
   width:100vw;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
    margin-left:25px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}

.copyright-text
{
  text-align:center;
}
@media (max-width:991px)
{
  .site-footer [class^=col-]
  {
    margin-bottom:30px
  }
}
@media (max-width:767px)
{
  .site-footer
  {
    padding-bottom:0
  }
  .site-footer .copyright-text,.site-footer .social-icons
  {
    text-align:center
  }
}

@media (max-width:767px)
{
  .social-icons li.title
  {
    display:block;
    margin-right:0;
    font-weight:600
  }
}
.front-button {
  background-color: #1E90FF;
  border: 5px solid white;
    border-radius: 5px;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 26px;
    font-style:bold;
  margin: 4px 2px;
  cursor: pointer;
    transform:  translate(0,-300%);
}





.display_table
{
    width:100vw;
    height:100vh;
    background-image:url('images/03.jpg');
    display:flex;
    flex-direction:column;
    justify-content: center;
    text-align:center;
}
.center_div
{
    width:90vw;
    height:100vh;
    background-repeat:no-repeat;
    background-size:100%;
    padding:20px 0 0 0;
    box-shadow:0 10px 20px 0 rgba(0,0,0,0.03);
    border-radius:10px;
    margin-left:30px;
}
table
{
    border-collapse:collapse;
    background-color:black;
    box-shadow:0 10px 20px 0 rgba(0,0,0,0.03);
    border-radius: 10px;
    border-collapse:collapse;
    table-layout:fixed;
    opacity:0.7;
    color:#F7CC1A;
    font-weight:bold;
    margin:auto;
}
th,td
{
  border:1px solid #1E90FF;
   padding:8px 30px;
  text-align:center;
  opacity:0.9;
  color:white ; 
}
th{
    text-transform:uppercase;
    font-weight:500;
}
td
{
    font-size:13px;
}


.trans{
    background-image:url('images/03.jpg');

}


.contain {
  width: 100vw;
  margin-left:10%;
  
  
}
@media (min-width: 600px) {
  .contain {
    padding: 0;
  }
}

.contain h3,
ul {
  margin: 0;
}

.contain h2{
    color: #1E90FF;
    font:Arial, sans-serif;
    font-weight: bold;
}

.contain h3 {
  margin-bottom: 1rem;
}

.contain input:focus,
textarea:focus {
  outline: 3px solid gold;
}

.contain input,
textarea,
button {
  width: 100%;
  border: 1px solid #000;
}

.wrapper {
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
}
.wrapper > * {
  padding: 1em;
}
@media (min-width: 700px) {
  .wrapper {
    display: grid;
    grid-template-columns: 1fr 2fr;
  }
  .wrapper > * {
    padding: 2em 2em;
  }
}

.wrapper ul {
  list-style: none;
  padding: 0;
}


.form {
  background-image: linear-gradient(#696969, #2F4F4F);
}

form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}
form label {
  display: block;
}
form p {
  margin: 0;
    width:500px;
}


button,
input,
textarea {
  padding: 1em;
}

button {
  background: lightgrey;
  width: 100%;
  border: 0;
margin-left:50%;
}
button:hover, button:focus {
  background: #1E90FF;
  outline: 0;
}
