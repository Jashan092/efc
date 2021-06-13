import time
import discord
from discord import guild
from discord.ext import commands
from discord.ext.commands.core import command

from tc import tc

class ping(commands.Cog):
    def __init__(self,bot):
        self.bot = bot
    
    @commands.command()
    async def ping(self,ctx):
        before = time.monotonic()
        message = await ctx.send("test message please ignore")
        pin = (time.monotonic() - before) * 1000
        embed = discord.Embed(title=f"Latency \n {int(pin)}ms",color=discord.Color.dark_green())
        await ctx.send(embed=embed)
        banned_users = await ctx.guild.bans()
        print(banned_users)

    @commands.command() # this is for making a command
    async def pingg(self, ctx):
	    await ctx.send(f'Pong! {round(self.bot.latency * 1000)}')


        
def setup(bot):
    bot.add_cog(ping(bot))