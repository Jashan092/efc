from discord import client
from discord.ext import commands
import os
import discord
from dotenv import dotenv_values
import tc
config = dotenv_values('.env')
intents = discord.Intents.default()
intents.members = True
bot = commands.Bot(command_prefix="!",intents=intents)


# @bot.add_listener

@bot.command() 
async def members(ctx):    
    server_members = ctx.guild.members 
    data = "\n".join([member.name for member in server_members])
    embed = discord.Embed(title = f'Server Members', description = f"{data}", color = discord.Color.dark_blue())
    await ctx.send(embed=embed)
# Utilities
for filename in os.listdir("./events"):
    if filename.endswith(".py") and filename != "__init__.py":
        bot.load_extension(f"events.{filename[:-3]}")

# commands
for filename in os.listdir("./commands"):
    if filename.endswith(".py") and filename != "__init__.py":
        bot.load_extension(f"commands.{filename[:-3]}")


botd = bot.run(config['efc_token'])