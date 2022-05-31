# Japan Cities Tourist Guide and Weather information

The given instructions was to create a web app that aims to provide travel information to new foreign tourist visiting Japan for the first time, through analyzing the requirements of the system I came up with the following results. I make it simple and user friendly as much as possible since not all users might be as techy as other people.

1. Select a city that the user want to go.

![image](https://user-images.githubusercontent.com/85120653/171114125-8348a59c-084e-4c44-9272-a0d9aeea9db0.png)

after the user select which city or place he/she wants to go the page will call the api and make a request to grab the weather forecast of the specific place.

![image](https://user-images.githubusercontent.com/85120653/171114423-c3180c5d-41f1-4138-8d14-d4a7457654a1.png)

they will be then redirected to another page containing the weather forecast of and the tourist attraction in the selected place. this will give a brief information to the user where to go in his/her travel. As what we required we need to also guide the tourist/users in their visits also providing a weather forecast will help them to schedule their trip.

regarding the UX / UI it's responsive in different devices so this means the user can use his/her mobile, laptop, tablet or  desktop in viewing the website/ web app.


# Back-End Coding

It's always challenging creating a back-end infrastracture of the web-app, in implementing the back-end I've considered multiple aspect. 
1. Compatibility
2. Usability
3. Efficiency 
4. Security


I've use PHP-LARAVEL as the main php framework of the system, and add a native javascript for the xhttp request and other animation and UI changability. You might ask we can use vue.js and a native PHP code implementing the web app and yes we can actually implement it like that. but however is it really efficient to use? 
As wht I can say there's always a simplier way to implement this and I can see that the laravel can meet up the requirements.

in creating or connecting to the openweather api we can say that we are having an API key and leaking an API key in Javascript request is a really disastrous scenario, so I took laravel since we can just implement the API Key under the environment variable though we can actually implement it under the KMS of other 3rd party provider for added security layer. Keys should not be implemented in a open-eye sources such as JS.



# Conclusion

Creating a web-app that will help new / first time foreign tourist in a specified place might sound complicated but actually it's simple but hard to implement. Complicated in terms of what things are we really gonna use to implement it. Simple if we know what are our target audience for the web app. 



