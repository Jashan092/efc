jQuery is write less do more library. 
basically jQuery is used for DOM manipulation and for xml http request. 
many companiies use this for its compability comapanies like.. Google, IBM , FaceBook use this.
so, which version should download? there are 2 versions that I know compressed version and uncompressed version. 
1. compressed version  ---> 1. It is used for production. 
                            2. We can't see the source code. 
                            3. can't solve error 
                            4. better speed users directly access it.
2. uncompressed version ---> 1. We can see the source code.
                             2. By seeing the souce code we can solve the errors.
                             3. Users can't directly access it.
                             4. Slower than compressed version.
                        
1. After installing I am saving this to /home/user/DECINE/jQuery/js/
2. Include jQuery in head and defer it.
3. add jQuery after body and custom script and type in custom script: console.log($)
4. It should return | ƒ (e,t){return new S.fn.init(e,t)} | If not than you're having some trouble.
5. What is CDN?
    CDN is Content Delivery Network. It was introduced in late 1990s for increasing tha speed of loading web objects, web pages . We will serve Internet by CDN.
6. You can use this <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    instead of downloading and adding jQuery. 
7. In my case this cdn did not worked so, I used google cdn |  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   |  This worked for me at least.
8. So, don't you think what is the $? 
    $ mean jQuery if you write jQuery instead of $ it will work same.
9. jQuery syntax:
    $('selector').action()