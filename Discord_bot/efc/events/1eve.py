from discord.ext import commands
from discord.ext.commands.core import command
import tc

class events(commands.Cog):
    def __init__(self,bot):
        self.bot = bot
    
    @commands.Cog.listener()
    async def on_ready(self):
        print(tc.tc.bright_green, "Bot started successfuly", tc.tc.reset)

def setup(bot):
    bot.add_cog(events(bot))