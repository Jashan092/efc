 from discord.ext import commands

class event(commands.Cog):
    def __init__(self,bot):
        self.bot = bot

    @commands.Cog.listener()
    async def on_member_remove(self,member):
        memNm = f"{member}".split("#")
        await self.bot.get_channel(853506986737401876).send(f"<@{member.id}> got scared and leaved us.")
    
def setup(bot):
    bot.add_cog(event(bot))