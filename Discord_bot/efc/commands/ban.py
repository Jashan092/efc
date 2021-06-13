import discord
from discord.ext import commands
import time

class ban(commands.Cog):
    def __init__(self,bot):
        self.bot = bot
    
    @commands.command(brief="This command will ban users only admin and people with specific can access this. :P",description="The command can ban any discord member.")
    @commands.has_any_role("Owner","Moderator")
    async def ban(self,ctx, member:discord.User=None, reason =None):
        if member == None :
                await ctx.channel.send("Member doesn't exist")
                return
        if member == ctx.message.author:
            await ctx.channel.send("You can't ban yourself")
            return
        if reason == None:
            reason = "For being a jerk!"
        message = f"You have been banned from {ctx.guild.name} for {reason}"
        await member.send(message)
        await ctx.guild.ban(member, reason=reason)
        await ctx.channel.send(f"{member} is banned!")



def setup(bot):
    bot.add_cog(ban(bot))