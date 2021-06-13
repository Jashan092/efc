import discord
from discord.ext import commands
from discord.ext.commands.core import command

class kick(commands.Cog):
    def __init__(self,bot):
        self.bot = bot

    @commands.has_permissions(kick_members=True)
    @commands.command(description="This command can kick any user")
    async def kick(self,ctx,member:discord.Member,*,reason=None):
        await ctx.guild.kick(member)
        await ctx.send(f"user {member} has been kicked")

def setup(bot):
    bot.add_cog(kick(bot))