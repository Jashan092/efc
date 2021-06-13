import discord
from discord.ext import commands

class event(commands.Cog):
    def __init__(self,bot):
        self.bot = bot


    @commands.Cog.listener()
    async def on_member_join(self, member):
        ment = member.id
        omj = f"Hello, <@{ment}>. Glad to see you here. Hope that you will enjoy this server. Introdice yourself in <#852114055807238144> and get roles in <#852113132208914432>"
        await self.bot.get_channel(853506951774076938).send(omj)

def setup(bot):
    bot.add_cog(event(bot))
