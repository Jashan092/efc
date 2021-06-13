from pymongo import MongoClient
cluster = MongoClient("mongodb+srv://mamba:whoami@cluster0.bm3nl.mongodb.net/myFirstDatabase?retryWrites=true&w=majority")
db = cluster["discord_db_1"]
collection = db["users"]
post = {"id":0,"name": "Mister.X","score":300}
# collection.insert_one(post)
collection.insert_many([{"_id":7,"name":"Iron","optc":"Crzy"},{"_id":9,"name":"Man","optc":"Crazy"}])
res = collection.find({"name":"Iron"})
for result in res:
    print(result)