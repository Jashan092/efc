import discord
from discord.ext import commands


class unban(commands.Cog):
    def __init__(self, bot):
        self.bot = bot

    @commands.command(brief="This command can unban users only admin and people with specific can access this. :P", description="The command can unban any discord member.")
    @commands.has_any_role("Owner", "Moderator")
    async def unban(self, ctx, member, reason=None):
        if member == None:
            await ctx.channel.send("Member doesn't exist")
            return
        if member == ctx.message.author:
            await ctx.channel.send("You can't unban yourself")
            return
        print("At stage 2")
        message = f"You have been unbanned from {ctx.guild.name}"
        member_name = member
        banned_users = await ctx.guild.bans()
        print(banned_users)
        print("Stage 3")
        # await ctx.send("Member doesn't exist in ban entries")
        # return
        for ban_entry in banned_users:
            print("Stage 3?")
            user = ban_entry.user
            if (user.name == member_name):
                print("real?")
                
                await ctx.guild.unban(user)
                await ctx.channel.send(f"Unbanned: {user.mention}")


def setup(bot):
    bot.add_cog(unban(bot))
