from memgpt.config import AgentConfig
from memgpt import MemGPT
from memgpt import constants
from memgpt.cli.cli import QuickstartChoice

# Create a MemGPT client object (sets up the persistent state)
client = MemGPT(
    quickstart="openai",
    config={
      "openai_api_key": "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"
    }
)

# You can set many more parameters, this is just a basic example
agent_state = client.create_agent(
    agent_config={
      "persona": "sam_pov",
      "human": "cs_phd",
    }
)

# Now that we have an agent_name identifier, we can send it a message!
# The response will have data from the MemGPT agent
my_message = "Hi MemGPT! How's it going?"
response = client.user_message(agent_id=agent_state.id, message=my_message)